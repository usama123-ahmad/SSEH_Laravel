@extends('masterLayout')
@section('title','School Life')
@section('main')
<form action="registeruser" method="POST"> 
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="name" class="form-control" id="exampleuser1" aria-describedby="emailHelp" placeholder="Enter User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection