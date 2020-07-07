@extends('layouts.app')

@section('content')


<h1>ALL Authors </h1>

@auth
<a href="{{ route('createAuthors') }}" class="btn btn-info my-3">Add new </a>
@endauth




@foreach($authors as $author)

<hr>

@if($author->img !== null)

<img src='{{ asset("uploads/$author->img")}}' class="img-fluid">
@endif

<a href="{{ route('showAuthor', $author->id) }}">


<h1>{{ $author->name}}</h1>
</a>

<p>{{ $author->bio}}</p>

<a href="{{ route('showAuthor', $author->id) }}" class="btn btn-danger my-3">Show</a>

@auth
<a href="{{ route('editAuthors', $author->id) }}" class="btn btn-info my-3">Edit</a>
<a href="{{ route('deleteAuthors', $author->id) }}" class="btn btn-dark my-3">Delete</a>
@endauth

@endforeach


{!! $authors->render()!!}




@endsection