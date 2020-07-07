
@extends('layouts.app')

@section('content')






@if($book->img !== null)

<img src='{{ asset("uploads/$book->img")}}' class="img-fluid">
@endif


<h1>{{$book->name}}</h1>
<p>{{$book->desc}}</p>
<p>${{$book->price}}</p>

<p>By:
<a href="{{route('showAuthor',$book->author->id)}}"> 
 {{$book->author->name}}</p>
</a> 

<a href="{{ route('allBooks') }}" class="btn btn-primary">Back to all</a>




@endsection