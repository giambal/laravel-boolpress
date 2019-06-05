<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\EditRequest;


use App\Category;
use App\Post;

class PostController extends Controller
{

  public function showPost($id)
  {

    $post=Post::where('id',$id)->get()->first();
    return view('page.post-show',compact('post'));
  }

  public function createPost()
  {
    $categories=Category::all();
    return view('page.createPost',compact('categories'));
  }

  public function savePost(PostRequest $request)
  {
    $validateData=$request->validated();
    $post=Post::create($validateData);
    $categoriesId=$validateData['categories'];
    $categories=Category::find($categoriesId);

    $post->categories()->attach($categories);

    return redirect('/');
  }

  public function editPost($id)
  {
    $post=Post::findOrFail($id);
    $categories=Category::all();
    return view('page.edit-post',compact('post','categories'));
  }

  public function updatePost(EditRequest $request,$id)
  {

    // dd($request->all());
    $validateData=$request->validated();
    $post=Post::findOrFail($id);
    $post->update($validateData);
    $categoriesId=$validateData['categories'];
    $categories=Category::find($categoriesId);

    $post->categories()->sync($categories);

    return redirect('/');
  }

  public function deletePost($id)
    {

        $post=Post::findOrFail($id);
                    $post->categories()->delete();
                    $post->delete();

                    return redirect('/');



    }
}
