@extends ('layout.layout')

@section('content')

<div class="show-container">

  <div class="posts-containter">


    <div class="card">
      <h2>{{$post->author->firstname}} {{$post->author->lastname}}</h2>
      <h4>{{$post->title}}</h4>
      <p class="post-content">{{$post->content}}</p>

      @foreach($post->categories as $category)
        <span>
          <a href="{{route('posts.by.category', $category->type) }}">
            #{{$category->type}}
          </a>
        </span>
      @endforeach
      <h6>{{$post->updated_at}}</h6>

      <a class="link" href="#"><i class="fas fa-edit"></i></a>
      <form class="" action="#" method="post">
        @csrf
        @method('DELETE')
        <button class="del-butt" type="submit"><i class="fas fa-trash-alt"></i></button>
      </form>
    </div>

  </div>
</div>

@stop
