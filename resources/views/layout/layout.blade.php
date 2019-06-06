<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>

        <title>Post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
      <header>
        <h1><i class="fas fa-comment-alt"></i></h1>
        <h1>Social Platform</h1>
        <h2><a class="homeBtn" href="{{route('home')}}">HOME PAGE</a></h2>
      </header>

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @if(session('success'))
        <div class="alert alert-success">
          <div class="cont">
            {{ session('success') }}
          </div>
        </div>
      @endif


      @yield('content')


      <footer class="foot">
        <div class="">
          Made By Giammarco.
        </div>

      </footer>

    </body>
</html>
