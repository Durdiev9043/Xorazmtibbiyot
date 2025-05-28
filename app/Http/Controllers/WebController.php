<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $categories =Category::all();
        $new=Post::with('images')->latest()->first();
        $new2=Post::with('images')->latest()->first();
        $news=Post::with('images')->latest()->take(4)->get();
        $news3=Post::with('images')->latest()->take(3)->get();
        $latest=Post::with('images')->latest()->take(8)->get();

       return view('welcome',['categories'=>$categories,'new'=>$new,'new2'=>$new2,'news'=>$news,'news3'=>$news3,'latest'=>$latest]);

    }

    public function cat($id)
    {
        $cat=Category::where('id',$id)->get();
        $news=Post::where('category_id',$id)->with('images')->get();
        $latest=Post::with('images')->latest()->take(8)->get();
        return view('cat',['news'=>$news,'cat'=>$cat,'latest'=>$latest]);
    }
    public function post($id)
    {
        $new=Post::where('id',$id)->with('images')->first();
        $cat=Category::where('id',$new->category_id)->first();
        $latest=Post::with('images')->latest()->take(8)->get();
        return view('new',['new'=>$new,'cat'=>$cat,'latest'=>$latest]);
    }


}
