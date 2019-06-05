<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{

    public function getPosts()
    {
      $posts=Post::orderByDesc('updated_at')->take(5)->get();
      return view('page.index',compact('posts'));
    }
}
