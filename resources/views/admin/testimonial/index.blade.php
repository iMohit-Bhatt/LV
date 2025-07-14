@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Testimonials</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New Testimonial
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Rating</th>
                                    <th>Status</th>
                                    <th>Sort Order</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>
                                        @if($testimonial->image)
                                            <img src="{{ asset('storage/' . $testimonial->image) }}" 
                                                 alt="{{ $testimonial->name }}" 
                                                 class="img-thumbnail" 
                                                 style="max-width: 50px; max-height: 50px;">
                                        @else
                                            <span class="text-muted">No image</span>
                                        @endif
                                    </td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->position }}</td>
                                    <td>
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-warning' : 'text-muted' }}"></i>
                                        @endfor
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $testimonial->is_active ? 'success' : 'danger' }}">
                                            {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>{{ $testimonial->sort_order }}</td>
                                    <td>{{ $testimonial->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.testimonial.show', $testimonial->id) }}" 
                                           class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center">No testimonials found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $testimonials->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 