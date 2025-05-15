<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $categories =Category::whereNull('parent_id')->with('subcategories')->get();
        $new=Post::with('images')->latest()->first();
        $new2=Post::with('images')->latest()->first();
        $news=Post::with('images')->latest()->take(4)->get();
        $news3=Post::with('images')->latest()->take(3)->get();
        $latest=Post::with('images')->latest()->take(8)->get();

       return view('welcome',['categories'=>$categories,'new'=>$new,'new2'=>$new2,'news'=>$news,'news3'=>$news3,'latest'=>$latest]);

    }


}
