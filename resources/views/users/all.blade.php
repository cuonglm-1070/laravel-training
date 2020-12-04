@extends('layouts.app');

@section('title',"Show all users")

@section('content')

<div class="text-center">
    <h1 class="title font-weight-bold text-secondary">There are {{ count($users) }} users</h1>
</div>

{{-- /users --}}
@if($users ?? '')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Fullname</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                    <div>
                        <td>
                            <button class="btn btn-info d-inline">
                                <a href="{{ route('users.show',$user) }}"
                                    class="text-light">View</a>
                            </button>
                            <form action="{{ route('users.show',$user) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">X</button>
                            </form>
                        </td>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@endsection
