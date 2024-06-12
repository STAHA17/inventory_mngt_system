@extends('layouts.app')

@section('content')
    <h1>Staff Details</h1>
    <div class="card">
        <div class="card-header">
            Staff ID: {{ $staff->id }}
        </div>
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $staff->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $staff->last_name }}</p>
            <p><strong>Email:</strong> {{ $staff->email }}</p>
            <p><strong>Phone:</strong> {{ $staff->phone }}</p>
            <p><strong>Position:</strong> {{ $staff->position }}</p>
            <p><strong>Salary:</strong> {{ $staff->salary }}</p>
            <a class="btn btn-primary" href="{{ route('staff.edit', $staff->id) }}">Edit</a>
            <form action="{{ route('staff.destroy', $staff->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{ route('staff.index', $staff->id) }}">Back</a>
        </div>
    </div>
@endsection
