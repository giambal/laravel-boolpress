<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\EditRequest;


use App\Category;
use App\Post;
use App\Author;

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
    $authors=Author::all();
    return view('page.createPost',compact('categories','authors'));
  }

  public function savePost(PostRequest $request)
  {
    $validateData=$request->validated();
    // dd($validateData);

    $authorId=$validateData['author_id'];
    $author=Author::find($authorId);
    $categoriesId=$validateData['categories'];
    $categories=Category::find($categoriesId);

    $post=Post::create($validateData);
    $post->categories()->attach($categories);
    $post->author()->associate($author);

    return redirect('/');
  }

  public function editPost($id)
  {
    $post=Post::findOrFail($id);
    $categories=Category::all();
    $authors=Author::all();
    return view('page.edit-post',compact('post','categories','authors'));
  }

  public function updatePost(EditRequest $request,$id)
  {

    // dd($request->all());
    $validateData=$request->validated();
    $post=Post::findOrFail($id);
    // print_r($post);die();
    $post->update($validateData);
    // print_r($validateData); die();



    $categoriesId=$validateData['categories'];
    $categories=Category::find($categoriesId);

    $authorId=$validateData['author_id'];
    $author=Author::find($authorId);

    $post->categories()->sync($categories);
    $post->author()->associate($author);

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
