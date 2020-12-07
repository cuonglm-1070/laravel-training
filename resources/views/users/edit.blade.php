@extends('layouts.app');

@section('title',"Edit user {{ $user->id }}")

@section('content')

@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

<h1 class="text-center">Edit user {{ $user->id }}</h1>
<form class="border rounded px-3 py-4" action="/users/{{ $user->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="inputAddress">Username</label>
        <input type="text" name="username" class="form-control" value="{{ $user->username }}" id="inputAddress"
            placeholder="admin">
    </div>

    <div class="form-group">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="inputEmail4"
            placeholder="Email">
    </div>
    {{-- </div> --}}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">First name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="inputEmail4"
                placeholder="First name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Last name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}"
                id="inputPassword4" placeholder="Last name">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update profile</button>
</form>
@endsection
