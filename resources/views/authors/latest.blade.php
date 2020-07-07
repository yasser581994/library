

@extends('layouts.app')

@section('content')






@foreach($authors as $author)

<hr>
@if($author->img !== null)

<img src='{{ asset("uploads/$author->img")}}' class="img-fluid">
@endif

<h1>{{ $author->name}}</h1>
<p>{{ $author->bio}}</p>

@endforeach





@endsection