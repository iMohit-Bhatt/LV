<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>View Blog Post</h1>
                    <div>
                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                            <div class="card-body">
                                @if($blog->featured_image)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $blog->featured_image) }}" 
                                             alt="{{ $blog->title }}" 
                                             class="img-fluid rounded">
                                    </div>
                                @endif

                                @if($blog->excerpt)
                                    <div class="mb-3">
                                        <h5>Excerpt:</h5>
                                        <p class="text-muted">{{ $blog->excerpt }}</p>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <h5>Content:</h5>
                                    <div class="border rounded p-3 bg-light">
                                        {!! $blog->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Post Details</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>ID:</strong></td>
                                        <td>{{ $blog->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Slug:</strong></td>
                                        <td>{{ $blog->slug }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Category:</strong></td>
                                        <td><span class="badge bg-secondary">{{ $blog->category }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Author:</strong></td>
                                        <td>{{ $blog->author }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status:</strong></td>
                                        <td>
                                            @if($blog->status === 'published')
                                                <span class="badge bg-success">Published</span>
                                            @else
                                                <span class="badge bg-warning">Draft</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Views:</strong></td>
                                        <td>{{ $blog->views }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Published Date:</strong></td>
                                        <td>
                                            @if($blog->published_at)
                                                {{ $blog->formatted_published_date }}
                                            @else
                                                <span class="text-muted">Not published</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Created:</strong></td>
                                        <td>{{ $blog->created_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Updated:</strong></td>
                                        <td>{{ $blog->updated_at->format('M d, Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h5>Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <a href="{{ route('public.blog.show', $blog->slug) }}" 
                                       class="btn btn-outline-primary" 
                                       target="_blank">
                                        <i class="fas fa-eye"></i> View Public Page
                                    </a>
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" 
                                       class="btn btn-outline-secondary">
                                        <i class="fas fa-edit"></i> Edit Post
                                    </a>
                                    <form action="{{ route('admin.blog.destroy', $blog->id) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Are you sure you want to delete this blog post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger w-100">
                                            <i class="fas fa-trash"></i> Delete Post
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 