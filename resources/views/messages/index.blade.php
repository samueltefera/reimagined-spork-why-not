
@extends('layouts.admin')

@section('title', 'Messages')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Messages</h1>

        <div class="messages mt-4">
            @foreach ($unreadNotifications as $notification)
                <div class="alert alert-primary">
                    <p>{{ $notification->data['data'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
