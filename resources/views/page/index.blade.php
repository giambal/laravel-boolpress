@extends('layout.layout')

@section('content')


    <div class="index-container">

      <div class="left-cont">
        <h2><a href="{{route('create.post')}}">Create New Post</a></h2>
        <div class="check-container">

          <h3><a href="{{route('category.list')}}">choose a chategory: </a></h3>

          <form class="" action="{{route('search')}}" method="get">
            <h1>Search:</h1>
            <div class="formDiv">
              <label for="title">Title</label><br>
              <input type="text" name="title" value="">
            </div>
            <div class="formDiv">
              <label for="content">Content</label><br>
              <input type="text" name="content" value="">
            </div>
            <div class="formDiv">
              <label for="category">Category</label><br>
              <select name="category">
                  <option value="">choose a category</option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->type}}</option>
                  @endforeach
              </select>
            </div>
            <div class="formDiv">
              <label for="author">Author</label><br>
              <select name="author">
                <option value="">choose an author</option>
                @foreach($authors as $author)
                  <option value="{{$author->id}}">{{$author->firstname}} {{$author->lastname}}</option>
                @endforeach
            </select>
            </div>
            <input type="submit" name="" value="SEARCH">
          </form>
        </div>
      </div>

      <div class="posts-containter">
        @foreach($posts as $post)


          <div class="card">
            <h2>{{$post->author->firstname}} {{$post->author->lastname}}</h2>
            <h3>{{$post->title}}</h3>
            <p class="post-content">{{$post->content}}</p>

            @foreach($post->categories as $category)
              <span>
                <a href="{{route('posts.by.category', $category->type) }}">
                  #{{$category->type}}
                </a>
              </span>
            @endforeach
            <h6>{{$post->updated_at}}</h6>

            <a class="link" href="{{route('edit.post',$post->id)}}"><i class="fas fa-edit"></i></a>
            <form class="" action="{{route('del.post',$post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
            <div class="readmore"><a href="{{route('show.post',$post->id)}}">Read Post</a></div>
          </div>

        @endforeach

      </div>
  </div>

@stop
