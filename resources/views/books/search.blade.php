
@extends('layouts.app')

@section('content')








@foreach($books as $book)

<hr>
@if($book->img !== null)

<img src='{{ asset("uploads/$book->img")}}' class="img-fluid">
@endif

<h1>{{ $book->name}}</h1>
<p>{{ $book->desc}}</p>

@endforeach

<a href="{{ route('allBooks') }}">Back to all</a>




@endsection