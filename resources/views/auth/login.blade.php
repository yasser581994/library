@extends('layouts.app')

@section('content')

@include('inc.errors')


<form method="post" action="{{ route('doLoginAuth')}}">
@csrf

  <div class="form-group">
  <label for="exampleInputName">Email</label>
    <input type="email"  placeholder="email" class="form-control" name="email">
  </div>

  <div class="form-group">
  <label for="exampleInputName">Name</label>
    <input type="password"  placeholder="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  @endsection
