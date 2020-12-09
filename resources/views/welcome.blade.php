@extends('layouts.app');

@section('title', 'Laravel')

@section('content')
    <div class="text-center">
        {{-- @auth
        <div class="alert alert-success">You're logged in as {{ Auth::user()->username }}</div>
        @endauth --}}

        <div class="title m-b-md">
            Laravel Training
        </div>

        <div class="links">
            <a href="{{ route('users.index') }}">Users</a>
            <a href="/posts">Posts</a>
        </div>
    </div>
@endsection
