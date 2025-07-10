@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Properties</h2>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary">Add New Property</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Location</th>
                <th>Price Range</th>
                <th>BHK Range</th>
                <th>Area Range</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>{{ ucfirst($property->type) }}</td>
                    <td>{{ $property->location }}</td>
                    <td>{{ $property->price_range }}</td>
                    <td>{{ $property->bhk_range }}</td>
                    <td>{{ $property->area_range }}</td>
                    <td>
                        @if($property->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.property.edit', $property->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.property.destroy', $property->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No properties found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 