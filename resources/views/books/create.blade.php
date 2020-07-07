

@extends('layouts.app')

@section('content')



<div class="container my-2 py-5">
@include('inc.errors')

<form method="POST" action="{{route('storeBooks')}}" enctype="multipart/form-data">

@csrf
  <div class="form-group">
  
  <label for="exampleInputName">Name</label>
    <input type="text"  placeholder="name" class="form-control" name="name">
  </div>

  
  <div class="form-group">
  <label for="exampleInputName">Price</label>
    <input type="number"  placeholder="price" class="form-control" name="price">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">textarea</label>
    <textarea class="form-control" name='desc'  placeholder="desc" rows="3"></textarea>
  </div>


  <select class="form-control" name="author_id">

  @foreach($authors as $author)
  <option value="{{$author->id}}">{{$author->name}}</option>
  @endforeach
  </select>
  

  <div class="form-group">
    <label for="exampleFormControlFile1">Uploads Image</label>
    <input type="file" class="form-control-file" name="img">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection