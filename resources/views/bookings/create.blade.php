@extends('layouts.app')

@section('content')
    <h1>Add Booking</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="room_id">Room:</label>
            <select class="form-control" id="room_id" name="room_id" required>
                @foreach ($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_number }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="check_in">Check In:</label>
            <input type="date" class="form-control" id="check_in" name="check_in" required>
        </div>
        <div class="form-group">
            <label for="check_out">Check Out:</label>
            <input type="date" class="form-control" id="check_out" name="check_out" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" class="form-control" id="total_price" name="total_price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="confirmed">Confirmed</option>
                <option value="checked_in">Checked In</option>
                <option value="checked_out">Checked Out</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-secondary" href="{{ route('bookings.index') }}">Back</a>
    </form>
@endsection
