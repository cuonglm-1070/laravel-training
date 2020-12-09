@extends('layouts.app');

@section('title',"Create new user")

@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<h1 class="text-center">Create new user</h1>
<form class="border rounded px-3 py-4" action="/users" method="POST">
    @csrf
    <div class="form-group">
        <label for="inputAddress">Username</label>
        <input type="text" name="username" class="form-control" id="inputAddress" placeholder="admin">
    </div>
    {{-- <div class="form-row"> --}}
    <div class="form-group">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    {{-- </div> --}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">First name</label>
            <input type="text" name="first_name" class="form-control" id="inputEmail4" placeholder="First name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Last name</label>
            <input type="text" name="last_name" class="form-control" id="inputPassword4" placeholder="Last name">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign up</button>
</form>
@endsection
