@extends('layout.layout')

@section('content')

  <h1>categories: </h1>

  <form class="" action="index.html" method="post">
    @foreach($categories as $category)

      <input type="checkbox" name="{{$category->type}}" value=""><span>{{$category->type}}</span><br>

    @endforeach
    <button type="submit" name="button">submit</button>
  </form>


@stop
