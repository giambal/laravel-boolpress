@extends ('layout.layout')

@section('content')
<div class="link">

  <a href="{{route('post.index')}}">Back to home</a>
</div>

<div class="index-container">

  <div class="posts-containter">


    <div class="card">
      <h3>{{$post->writer_name}} {{$post->writer_lastname}}</h3>
      <h4><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></h4>
      <p>{{$post->content}}</p>
      @foreach($post->categories as $category)
        <p>Category: {{$category->type}}</p>
      @endforeach
      <a class="link" href="{{ route('post.edit', $post->id ) }}"><i class="fas fa-edit"></i></a>
    </div>

  </div>
</div>

@stop
