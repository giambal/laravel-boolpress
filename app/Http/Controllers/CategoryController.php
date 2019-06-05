<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class CategoryController extends Controller
{

  public function getCategoryList()
  {

    $categories= Category::all();

    return view('page.category-index', compact('categories'));
  }

  public function getPostsByCategory($type)
  {
    $category=Category::where('type' , $type)->first();
    $posts= $category->posts->take(10);
    return view('page.post-by-id',compact('category','posts'));

  }


}
