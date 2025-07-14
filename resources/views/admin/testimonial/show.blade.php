@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Testimonial Details</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Testimonials
                        </a>
                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($testimonial->image)
                                <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                     alt="{{ $testimonial->name }}" 
                                     class="img-fluid rounded">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center" 
                                     style="height: 200px;">
                                    <span class="text-muted">No image</span>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">Name:</th>
                                    <td>{{ $testimonial->name }}</td>
                                </tr>
                                <tr>
                                    <th>Position:</th>
                                    <td>{{ $testimonial->position }}</td>
                                </tr>
                                <tr>
                                    <th>Rating:</th>
                                    <td>
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-warning' : 'text-muted' }}"></i>
                                        @endfor
                                        ({{ $testimonial->rating }}/5)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        <span class="badge bg-{{ $testimonial->is_active ? 'success' : 'danger' }}">
                                            {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sort Order:</th>
                                    <td>{{ $testimonial->sort_order }}</td>
                                </tr>
                                <tr>
                                    <th>Created:</th>
                                    <td>{{ $testimonial->created_at->format('F d, Y \a\t g:i A') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated:</th>
                                    <td>{{ $testimonial->updated_at->format('F d, Y \a\t g:i A') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Testimonial:</h5>
                            <div class="card">
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p class="mb-0">{{ $testimonial->testimonial }}</p>
                                        <footer class="blockquote-footer">
                                            <cite title="Source Title">{{ $testimonial->name }}, {{ $testimonial->position }}</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 