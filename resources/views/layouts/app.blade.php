

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('allAuthors') }}">All Authors</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ route('allBooks') }}">All Books</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
    @guest
        <a class="nav-link" href="{{route('registerAuth')}}">Register</a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="{{route('loginAuth')}}">Login</a>
      </li>
      @endguest

      @auth
      <li class="nav-item ">
        <a class="nav-link" href="#">{{ Auth::user()->name}}</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{route('logoutAuth')}}">Logout</a>
      </li>
      @endauth

    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
  <div class="col-md-12">

  @yield('content')
   </div>
   
  </div>
</div>

<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>

@yield('scripts')


</body>
</html>
