@extends('layouts.app')

@section('content')
    <h1>Inventory Item Details</h1>
    <div>
        <p><strong>Name:</strong> {{ $inventoryItem->name }}</p>
        <p><strong>Description:</strong> {{ $inventoryItem->description }}</p>
        <p><strong>Quantity:</strong> {{ $inventoryItem->quantity }}</p>
        <p><strong>Price:</strong> ${{ $inventoryItem->price }}</p>
    </div>
    <a class="btn btn-primary" href="{{ route('inventory.edit', $inventoryItem->id) }}">Edit</a>
    <form action="{{ route('inventory.destroy', $inventoryItem->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
