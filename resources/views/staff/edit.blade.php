@extends('layouts.app')

@section('content')
    <h1>Edit Staff</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $staff->first_name }}" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $staff->last_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $staff->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $staff->phone }}" required>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="manager" {{ $staff->role === 'manager' ? 'selected' : '' }}>Manager</option>
                <option value="receptionist" {{ $staff->role === 'receptionist' ? 'selected' : '' }}>Receptionist</option>
                <option value="housekeeping" {{ $staff->role === 'housekeeping' ? 'selected' : '' }}>HouseKeeping</option>
                <option value="maintenance" {{ $staff->role === 'maintenance' ? 'selected' : '' }}>Maintenance</option>
            </select>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ $staff->salary }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('staff.index', $staff->id) }}">Back</a>
    </form>
@endsection
