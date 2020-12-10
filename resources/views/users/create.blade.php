@extends('layouts.app');

@section('title', 'Create new user')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <h1 class="text-center">Create new user</h1>
    <form class="border rounded px-3 py-4" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputAddress">Username</label>
            <input type="text" name="username" @error('username') value="{{ old('username') }}" @enderror
                class="form-control" id="inputAddress" placeholder="admin">
        </div>
        {{-- <div class="form-row"> --}}
            <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" @error('password') value="{{ old('password') }}" @enderror name="password"
                    class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" @error('email') value="{{ old('email') }}" @enderror name="email" class="form-control"
                    id="inputEmail4" placeholder="Email">
            </div>
            {{--
        </div> --}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First name</label>
                <input type="text" @error('first_name') value="{{ old('first_name') }}" @enderror name="first_name"
                    class="form-control" id="inputEmail4" placeholder="First name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Last name</label>
                <input type="text" @error('last_name') value="{{ old('last_name') }}" @enderror name="last_name"
                    class="form-control" id="inputPassword4" placeholder="Last name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
@endsection
