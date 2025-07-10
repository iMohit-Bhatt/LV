@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Edit Company Director</h2>
    <form action="{{ route('admin.company-director.update', $director->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $director->name) }}" required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="8" required>{{ old('description', $director->description) }}</textarea>
            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
            <small class="form-text text-muted">You can use line breaks for better formatting.</small>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($director->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $director->image) }}" alt="Current Image" style="max-width: 150px;">
                </div>
            @endif
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
            <small class="form-text text-muted">Leave blank to keep current image.</small>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $director->is_active) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
        <div class="mb-3">
            <label for="sort_order" class="form-label">Sort Order</label>
            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', $director->sort_order) }}">
            @error('sort_order')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Update Director</button>
        <a href="{{ route('admin.company-director.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection 