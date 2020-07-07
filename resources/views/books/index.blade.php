@extends('layouts.app')

@section('content')


<h1>ALL Books </h1>

@auth

<a href="{{ route('createBooks') }}" class="btn btn-info my-3">Add new </a>

@endauth



@foreach($books as $book)

<hr>
  
  
@if($book->img !== null)

<img src='{{ asset("uploads/$book->img")}}' class="img-fluid">
@endif

  <a href="{{ route('showBook', $book->id) }}">


<h1>{{ $book->name}}</h1>
</a>

<p>{{ $book->desc}}</p>
<p>{{ $book->price}}</p>
<a href="{{ route('showBook', $book->id) }}" class="btn btn-danger my-3">Show</a>

@auth
<a href="{{ route('editBooks', $book->id) }}" class="btn btn-info my-3">Edit</a>
<a href="{{ route('deleteBooks', $book->id) }}" class="btn btn-dark my-3">Delete</a>
@endauth


@endforeach


{!! $books->render()!!}




@endsection