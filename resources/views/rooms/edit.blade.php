@extends('layouts.app')

@section('content')
    <h1>Edit Room</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ $room->room_number }}" required>
        </div>
        <div class="form-group">
            <label for="floor">Floor:</label>
            <input type="number" class="form-control" id="floor" name="floor" value="{{ $room->floor }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type" required>
                <option value="single" {{ $room->type == 'single' ? 'selected' : '' }}>Single</option>
                <option value="double" {{ $room->type == 'double' ? 'selected' : '' }}>Double</option>
                <option value="suite" {{ $room->type == 'suite' ? 'selected' : '' }}>Suite</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $room->price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available" {{ $room->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="occupied" {{ $room->status == 'occupied' ? 'selected' : '' }}>Occupied</option>
                <option value="maintenance" {{ $room->status == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('rooms.index', $room->id) }}">Back</a>
    </form>
@endsection
