@extends('layouts.app')

@section('content')
    <div class="justify-content-between mb-3">
        <h1>Staff</h1>
        <a class="btn btn-secondary" href="{{ route('staff.create') }}">Add Staff</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
        @foreach ($staff as $member)
            <tr>
                <td>{{ $member->first_name }}</td>
                <td>{{ $member->last_name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->position }}</td>
                <td>{{ $member->salary }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('staff.show', $member->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('staff.edit', $member->id) }}">Edit</a>
                    <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
