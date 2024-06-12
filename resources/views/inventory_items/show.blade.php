@extends('layouts.app')

@section('content')
    <h1>Inventory Item Details</h1>
    <div class="card">
        <div class="card-header">
            Inventory Item ID: {{ $inventory_item->id }}
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $inventory_item->name }}</p>
            <p><strong>Description:</strong> {{ $inventory_item->description }}</p>
            <p><strong>Quantity:</strong> {{ $inventory_item->quantity }}</p>
            <p><strong>Price:</strong> ${{ $inventory_item->price }}</p>
            <a class="btn btn-primary" href="{{ route('inventory_items.edit', $inventory_item->id) }}">Edit</a>
            <form action="{{ route('inventory_items.destroy', $inventory_item->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-primary" href="{{ route('inventory_items.index') }}">Back</a>
        </div>
    </div>
@endsection
