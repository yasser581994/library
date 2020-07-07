
@extends('layouts.app')

@section('content')






@if($author->img !== null)

<img src='{{ asset("uploads/$author->img")}}' class="img-fluid">
@endif


<h1>{{$author->name}}</h1>

<p>{{$author->bio}}</p>

@foreach($author->books as $book)
<a href="{{route('showBook',$book->id)}}">
<p>{{$book->name}}</p>
</a>
@endforeach
<a href="{{ route('allAuthors') }}" class="btn btn-primary">Back to all</a>




@endsection