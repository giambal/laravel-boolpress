@extends('layout.layout')

@section('content')


    <div class="index-container">

      <div class="left-cont">
        <h2><a href="{{route('create.post')}}">Create New Post</a></h2>
        <div class="check-container">

          <h3><a href="{{route('category.list')}}">choose a chategory: </a></h3>

        </div>
      </div>

      <div class="posts-containter">
        @foreach($posts as $post)


          <div class="card">
            <h3>{{$post->updated_at}}</h3>
            <h4>{{$post->title}}</h4>
            <p class="post-content">{{$post->content}}</p>

            @foreach($post->categories as $category)
              <span>
                <a href="{{route('posts.by.category', $category->type) }}">
                  #{{$category->type}}
                </a>
              </span>
            @endforeach

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
