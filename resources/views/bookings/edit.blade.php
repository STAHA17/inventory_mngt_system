@extends('layouts.app')

@section('content')
    <h1>Edit Booking</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="room_id">Room:</label>
            <select class="form-control" id="room_id" name="room_id" required>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}" {{ $room->id == $booking->room_id ? 'selected' : '' }}>{{ $room->room_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $booking->customer_id ? 'selected' : '' }}>{{ $customer->first_name }} {{ $customer->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check In:</label>
            <input type="date" class="form-control" id="check_in" name="check_in" value="{{ $booking->check_in }}" required>
        </div>
        <div class="form-group">
            <label for="check_out">Check Out:</label>
            <input type="date" class="form-control" id="check_out" name="check_out" value="{{ $booking->check_out }}" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" class="form-control" id="total_price" name="total_price" value="{{ $booking->total_price }}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="checked_in" {{ $booking->status == 'checked_in' ? 'selected' : '' }}>Checked In</option>
                <option value="checked_out" {{ $booking->status == 'checked_out' ? 'selected' : '' }}>Checked Out</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('bookings.index', $booking->id) }}">Back</a>
    </form>
@endsection
