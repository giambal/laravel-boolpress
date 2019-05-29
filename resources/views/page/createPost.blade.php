@extends('layout.layout')

@section('content')

  <div class="link">

    <a href="{{route('post.index')}}">Back to home</a>
  </div>

  <div class="create-container">

    <form action="{{ route('post.store')}}" method="post">
      @csrf
      <div class="formDiv">

        <label for="title">Title</label><br>
        <input type="text" name="title" value="">
      </div>
      <div class="formDiv">

        <label for="writer_name">Name</label><br>
        <input type="text" name="writer_name" value="">
      </div>
      <div class="formDiv">

        <label for="writer_lastname">Last name</label><br>
        <input type="text" name="writer_lastname" value="">
      </div>
      <div class="formDiv">

        <label for="content">write something</label><br>
        <input type="text" name="content" value="">
      </div>

      <!-- come mettere la categoria? -->
      
      <button type="submit" name="">Share Post</button>
    </form>
  </div>

@stop
