@extends('layout.layout')

@section('content')


    <div class="index-container">

      <div class="left-cont">
        <h2><a href="{{route('post.create')}}">Create New Post</a></h2>
        <div class="check-container">

          <h3><a href="{{route('category.index')}}">choose a chategory: </a></h3>
          @foreach($categories as $category)

            <input type="checkbox" name="{{$category->type}}" value="{{$category->type}}"><span>{{$category->type}}</span><br>
          @endforeach
        </div>
      </div>

      <div class="posts-containter">
        @foreach($posts as $post)


          <div class="card">
            <h3>{{$post->writer_name}} {{$post->writer_lastname}}</h3>
            <h4>{{$post->title}}</h4>
            <p class="post-content">{{$post->content}}</p>
            @foreach($post->categories as $category)
              <p>Category: {{$category->type}}</p>
            @endforeach
            <a class="link" href="{{ route('post.edit', $post->id ) }}"><i class="fas fa-edit"></i></a>
            <form class="" action="{{ route('post.destroy' , $post->id ) }}" method="post">
              @csrf
              @method('DELETE')
              <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
            <div class="readmore"><a href="{{route('post.show', $post->id)}}">Read Post</a></div>
          </div>

        @endforeach

      </div>
  </div>

@stop
