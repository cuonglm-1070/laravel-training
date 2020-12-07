@extends('layouts.app');

@section('title',"Laravel")

@section('content')
<div class="text-center">
    <div class="title m-b-md">
        Laravel Training
    </div>

    <div class="links">
        <a href="{{ route('users.index') }}">Users</a>
        <a href="/posts">Posts</a>
    </div>
</div>
@endsection
