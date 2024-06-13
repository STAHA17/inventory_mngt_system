@extends('layouts.app')

@section('content')
    <h1>Booking Details</h1>
    <div class="card">
        <div class="card-header">
            Booking ID: {{ $booking->id }}
        </div>
        <div class="card-body">
            <p><strong>Customer:</strong> {{ $booking->customer->first_name }} {{ $booking->customer->last_name }}</p>
            <p><strong>Room:</strong> {{ $booking->room->room_number }}</p>
            <p><strong>Check-in Date:</strong> {{ $booking->check_in }}</p>
            <p><strong>Check-out Date:</strong> {{ $booking->check_out }}</p>
            <p><strong>Status:</strong> {{ $booking->status }}</p>
            <a class="btn btn-primary" href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-primary" href="{{ route('bookings.index', $booking->id) }}">Back</a>
            </form>
        </div>
    </div>
@endsection
