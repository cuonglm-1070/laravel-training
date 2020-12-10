@extends('layouts.app');

@section('title', 'Laravel')

@section('content')
    <h1 class="text-center">Login</h1>
    <form class="border rounded px-3 py-4" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputAddress">Username</label>
            <input type="text" name="username" @error('username') value="{{ old('username') }}" @enderror
                class="form-control" id="inputAddress" placeholder="admin">
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" @error('password') value="{{ old('password') }}" @enderror name="password"
                class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Log me in</button>
    </form>
@endsection
