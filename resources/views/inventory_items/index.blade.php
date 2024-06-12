@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1>Inventory Items</h1>
        <a class="btn btn-primary" href="{{ route('inventory_items.create') }}">Add Item</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach ($inventoryItems as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->quantity }}</td>
                <td>${{ $item->price }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('inventory_items.show', $item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('inventory_items.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('inventory_items.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection