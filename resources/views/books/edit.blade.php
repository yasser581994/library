

@extends('layouts.app')

@section('content')


<div class="container my-2">
@include('inc.errors')


<form method="POST" action="{{route('updateBooks', $book->id)}}"  enctype="multipart/form-data">

@csrf
  <div class="form-group">
  
  <label for="exampleInputName">Name</label>
    <input type="text"  placeholder="name" class="form-control" name="name" value="{{ $book->name}}">
  </div>

  <div class="form-group">
  <label for="exampleInputName">Price</label>
    <input type="number"  placeholder="price" class="form-control" name="price"  value="{{ $book->price}}">
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name='bio'  placeholder="desc" rows="3">{{ $book->desc}}</textarea>
  </div>

  <select class="form-control" name="author_id">

@foreach($authors as $author)
<option value="{{$author->id}}" @if($author->id == $book->author_id) selected @endif>{{$author->name}}</option>
@endforeach
</select>

  <div class="form-group">
    <label for="exampleFormControlFile1">Uploads Image</label>
    <input type="file" class="form-control-file" name="img">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
  <a href="{{ route('allBooks') }}" class="btn btn-info my-3">Back</a>
  
</form>
</div>


@endsection

