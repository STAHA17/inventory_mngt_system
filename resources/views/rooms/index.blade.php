@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Rooms</h1>
        <a class="btn btn-primary" href="{{ route('rooms.create') }}">Add Room</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Room Number</th>
            <th>Floor</th>
            <th>Type</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ $room->floor }}</td>
                <td>{{ $room->type }}</td>
                <td>{{ $room->price }}</td>
                <td>{{ $room->status }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('rooms.show', $room->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('rooms.edit', $room->id) }}">Edit</a>
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
