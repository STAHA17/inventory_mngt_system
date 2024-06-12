@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-header">
            Customer ID: {{ $customer->id }}
        </div>
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $customer->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $customer->last_name }}</p>
            <p><strong>Email:</strong> {{ $customer->email }}</p>
            <p><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p><strong>Address:</strong> {{ $customer->address }}</p>
            <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{ route('customers.index', $customer->id) }}">Back</a>
        </div>
    </div>
@endsection
