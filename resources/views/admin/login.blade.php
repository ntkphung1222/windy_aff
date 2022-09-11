@extends('layouts.client')
@section('content')
<form style="padding-left: 5%; padding-right:5%;">
<div class="mb-3 row">
    <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsername">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <a href="/">
  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
@endsection
