<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('images')->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title_uz' => 'required',
            'content_uz' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = Post::create($request->only([
            'category_id', 'title_uz', 'title_ru', 'title_en',
            'content_uz', 'content_ru', 'content_en',
        ]));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('posts', 'public');
                $post->images()->create(['image' => $path]);
            }
        }

        return redirect()->route('posts.index')->with('success', 'Post yaratildi!');
    }

    public function show(Post $post)
    {
        $post->load('images');
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        $post->load('images');
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title_uz' => 'required',
            'content_uz' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post->update($request->only([
            'category_id', 'title_uz', 'title_ru', 'title_en',
            'content_uz', 'content_ru', 'content_en',
        ]));

        if ($request->hasFile('images')) {
            // Eski rasmlarni o‘chirish
            foreach ($post->images as $img) {
                Storage::disk('public')->delete($img->image);
                $img->delete();
            }

            foreach ($request->file('images') as $image) {
                $path = $image->store('posts', 'public');
                $post->images()->create(['image' => $path]);
            }
        }

        return redirect()->route('posts.index')->with('success', 'Post yangilandi!');
    }

    public function destroy(Post $post)
    {
        foreach ($post->images as $img) {
            Storage::disk('public')->delete($img->image);
            $img->delete();
        }

        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post o‘chirildi!');
    }
}
