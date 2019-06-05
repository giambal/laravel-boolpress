<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Author;

class HomeController extends Controller
{

    public function getPosts()
    {
      $posts=Post::orderByDesc('updated_at')->take(5)->get();
      $categories=Category::all();
      $authors=Author::all();
      return view('page.index',compact('posts','categories','authors'));
    }

    public function search(Request $request)
    {

      $title=$request->title;
      $content=$request->content;
      $category=$request->category;
      $author=$request->author;

      $query=Post::query();

      if ($title) {
        $query= $query->where('title','LIKE', '%' . $title . '%');
      }
      if ($content) {
        $query= $query->where('content','LIKE', '%' . $content . '%');
      }
      if ($author) {
        $query= $query->where('author_id' , $author);
      }
      // if ($category) {
      //   $query= $query->where('category_id' , $category);
      // }

      $posts=$query->get();
      $categories=Category::all();
      $authors=Author::all();

      return view('page.index',compact('posts','categories','authors'));


    }
}
