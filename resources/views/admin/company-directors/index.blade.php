@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Company Directors</h2>
        <a href="{{ route('admin.company-director.create') }}" class="btn btn-primary">Add New Director</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Status</th>
                <th>Sort Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($directors as $director)
                <tr>
                    <td>{{ $director->id }}</td>
                    <td>
                        @if($director->image)
                            <img src="{{ asset('storage/' . $director->image) }}" alt="{{ $director->name }}" style="max-width: 50px; height: auto;">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>{{ $director->name }}</td>
                    <td>
                        @if($director->is_active)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-secondary">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $director->sort_order }}</td>
                    <td>
                        <a href="{{ route('admin.company-director.edit', $director->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.company-director.destroy', $director->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No company directors found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection 