@extends('layout.layout')

@section('content')

  <div class="create-index">

    <h1>Edit post</h1>

    <form class="" action="{{route('update.post', $post->id)}}" method="post">
      @csrf
      @method('PATCH')


        <div class="formDiv">
          <label for="title">Title</label>
          <input class="input-text" type="text" name="title" value="{{$post->title}}">
        </div>
        <div class="formDiv">
          <label for="content">Content</label>
          <input class="input-text" type="text" name="content" value="{{$post->content}}">
        </div>

          <p>choose a category:</p>
        @foreach($categories as $category)
          <span>
            <input class="input-check" type="checkbox" name="categories[]" value="{{$category->id}}">{{$category->type}}
          </span><br>
        @endforeach

        <button type="submit" name="button">Share New Post</button>
    </form>
  </div>

@stop
