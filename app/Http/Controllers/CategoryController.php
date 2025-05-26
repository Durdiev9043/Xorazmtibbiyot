<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_uz' => 'required',
        ]);

        Category::create($request->only('name_uz', 'name_ru', 'name_en', ));

        return redirect()->route('categories.index')->with('success', 'Kategoriya yaratildi!');
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_uz' => 'required',
        ]);

        $category->update($request->only('name_uz', 'name_ru', 'name_en', ));

        return redirect()->route('categories.index')->with('success', 'Kategoriya yangilandi!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategoriya o‘chirildi!');
    }
}
