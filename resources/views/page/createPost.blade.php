@extends('layout.layout')

@section('content')

  <div class="create-index">

    <h1>Create New post</h1>

    <form class="" action="{{route('save.post')}}" method="post">
      @csrf
      @method('POST')


        <div class="formDiv">
          <label for="title">Title</label>
          <input class="input-text" type="text" name="title" value="">
        </div>
        <div class="formDiv">
          <label for="content">Content</label>
          <input class="input-text" type="text" name="content" value="">
        </div>
        <button type="submit" name="button">Share New Post</button>

          <p>choose new category:</p>
        @foreach($categories as $category)
          <span><input class="input-check" type="checkbox" name="categories[]" value="{{$category->id}}">{{$category->type}}</span><br>
        @endforeach

    </form>
  </div>

@stop
