@extends('layouts.app')

@section('content')
    <div class="justify-content-between mb-3">
        <h1>Bookings</h1>
        <a class="btn btn-secondary" href="{{ route('bookings.create') }}">Add Booking</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Room Number</th>
            <th>Customer Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->room->room_number }}</td>
                <td>{{ $booking->customer->first_name }} {{ $booking->customer->last_name }}</td>
                <td>{{ $booking->check_in }}</td>
                <td>{{ $booking->check_out }}</td>
                <td>{{ $booking->total_price }}</td>
                <td>{{ $booking->status }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('bookings.show', $booking->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
