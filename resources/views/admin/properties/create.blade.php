@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h2>Add New Property</h2>
    <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                <option value="residential" {{ old('type') == 'residential' ? 'selected' : '' }}>Residential</option>
                <option value="commercial" {{ old('type') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                <option value="plot" {{ old('type') == 'plot' ? 'selected' : '' }}>Plot</option>
                <option value="villa" {{ old('type') == 'villa' ? 'selected' : '' }}>Villa</option>
            </select>
            @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}" required>
            @error('location')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="pincode" class="form-label">Pincode</label>
            <input type="text" class="form-control @error('pincode') is-invalid @enderror" id="pincode" name="pincode" value="{{ old('pincode') }}">
            @error('pincode')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="price_range" class="form-label">Price Range</label>
            <input type="text" class="form-control @error('price_range') is-invalid @enderror" id="price_range" name="price_range" value="{{ old('price_range') }}" required>
            @error('price_range')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="bhk_range" class="form-label">BHK Range</label>
            <input type="text" class="form-control @error('bhk_range') is-invalid @enderror" id="bhk_range" name="bhk_range" value="{{ old('bhk_range') }}" required>
            @error('bhk_range')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="area_range" class="form-label">Area Range</label>
            <input type="text" class="form-control @error('area_range') is-invalid @enderror" id="area_range" name="area_range" value="{{ old('area_range') }}" required>
            @error('area_range')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required>
            @error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label for="modal_target" class="form-label">Modal Target (optional)</label>
            <input type="text" class="form-control @error('modal_target') is-invalid @enderror" id="modal_target" name="modal_target" value="{{ old('modal_target') }}">
            @error('modal_target')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
            <label class="form-check-label" for="is_active">Active</label>
        </div>
        <div class="mb-3">
            <label for="sort_order" class="form-label">Sort Order</label>
            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
            @error('sort_order')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-success">Create Property</button>
        <a href="{{ route('admin.property.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection 