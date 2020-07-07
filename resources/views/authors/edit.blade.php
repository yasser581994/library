

@extends('layouts.app')

@section('content')


<div class="container my-2">
@include('inc.errors')


<form method="POST" action="{{route('updateAuthors', $author->id)}}"  enctype="multipart/form-data">

@csrf
  <div class="form-group">
  
  <label for="exampleInputName">Name</label>
    <input type="text"  placeholder="name" class="form-control" name="name" value="{{ $author->name}}">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name='bio'  placeholder="bio" rows="3">{{ $author->bio}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Uploads Image</label>
    <input type="file" class="form-control-file" name="img">
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
  <a href="{{ route('allAuthors') }}" class="btn btn-info my-3">Back</a>
  
</form>
</div>


@endsection

