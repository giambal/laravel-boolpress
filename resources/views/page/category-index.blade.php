@extends('layout.layout')

@section('content')
  <div class="categories-index">

    <h1>filter post by categories</h1>

    <div class="category-list">
      @foreach($categories as $category)

        <h4><i class="fas fa-heart"></i><a href="{{route('posts.by.category', $category->type) }}">{{$category->type}}</a></h4>

      @endforeach
    </div>

  </div>


@stop
