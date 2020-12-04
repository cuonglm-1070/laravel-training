@extends('layouts.app');

@section('title',"User info")

@section('content')

{{-- /users/{id} --}}
<div class="text-center">
    <h1 class="title font-weight-bold">{{ $title }}</h1>
    @if($user ?? '')
        <h2 class="m-b-md">
            Your user id: {{ $user->id }}
        </h2>
        <h2 class="m-b-md">
            Your username: {{ $user->username }}
        </h2>
        <h2 class="m-b-md">
            Your fullname: {{ $user->first_name . ' ' . $user->last_name }}
        </h2>
        <a href="{{ route('users.edit',$user) }}">Edit</a>
    @endif
</div>

@endsection
