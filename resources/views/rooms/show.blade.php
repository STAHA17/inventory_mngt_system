@extends('layouts.app')

@section('content')
    <h1>Room Details</h1>
    <div class="card">
        <div class="card-header">
            Room Number: {{ $room->room_number }}
        </div>
        <div class="card-body">
            <p><strong>Floor:</strong> {{ $room->floor }}</p>
            <p><strong>Type:</strong> {{ $room->type }}</p>
            <p><strong>Price:</strong> {{ $room->price }}</p>
            <p><strong>Status:</strong> {{ $room->status }}</p>
            <a class="btn btn-primary" href="{{ route('rooms.edit', $room->id) }}">Edit</a>
            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{ route('rooms.index', $room->id) }}">Back</a>
        </div>
    </div>
@endsection
