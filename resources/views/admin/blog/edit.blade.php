<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Edit Blog Post</h1>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title *</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                               id="title" name="title" value="{{ old('title', $blog->title) }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="excerpt" class="form-label">Excerpt</label>
                                        <textarea class="form-control @error('excerpt') is-invalid @enderror" 
                                                  id="excerpt" name="excerpt" rows="3">{{ old('excerpt', $blog->excerpt) }}</textarea>
                                        @error('excerpt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content *</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                                  id="content" name="content" rows="15" placeholder="Write your blog content here...">{{ old('content', $blog->content) }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category *</label>
                                        <select class="form-select @error('category') is-invalid @enderror" 
                                                id="category" name="category" required>
                                            <option value="">Select Category</option>
                                            <option value="Investment" {{ old('category', $blog->category) == 'Investment' ? 'selected' : '' }}>Investment</option>
                                            <option value="Valuation" {{ old('category', $blog->category) == 'Valuation' ? 'selected' : '' }}>Valuation</option>
                                            <option value="Commercial" {{ old('category', $blog->category) == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                                            <option value="Residential" {{ old('category', $blog->category) == 'Residential' ? 'selected' : '' }}>Residential</option>
                                            <option value="Legal" {{ old('category', $blog->category) == 'Legal' ? 'selected' : '' }}>Legal</option>
                                            <option value="Development" {{ old('category', $blog->category) == 'Development' ? 'selected' : '' }}>Development</option>
                                            <option value="General" {{ old('category', $blog->category) == 'General' ? 'selected' : '' }}>General</option>
                                        </select>
                                        @error('category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="author" class="form-label">Author *</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror" 
                                               id="author" name="author" value="{{ old('author', $blog->author) }}" required>
                                        @error('author')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status *</label>
                                        <select class="form-select @error('status') is-invalid @enderror" 
                                                id="status" name="status" required>
                                            <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                            <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="featured_image" class="form-label">Featured Image</label>
                                        @if($blog->featured_image)
                                            <div class="mb-2">
                                                <img src="{{ asset('storage/' . $blog->featured_image) }}" 
                                                     alt="Current featured image" 
                                                     class="img-thumbnail" 
                                                     style="max-width: 200px;">
                                                <p class="text-muted small">Current image</p>
                                            </div>
                                        @endif
                                        <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                                               id="featured_image" name="featured_image" accept="image/*">
                                        <div class="form-text">Leave empty to keep current image. Recommended size: 800x600px. Max size: 2MB.</div>
                                        @error('featured_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Post Information</label>
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <p class="mb-1"><strong>Slug:</strong> {{ $blog->slug }}</p>
                                                <p class="mb-1"><strong>Views:</strong> {{ $blog->views }}</p>
                                                <p class="mb-1"><strong>Created:</strong> {{ $blog->created_at->format('M d, Y H:i') }}</p>
                                                <p class="mb-0"><strong>Updated:</strong> {{ $blog->updated_at->format('M d, Y H:i') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i> Update Post
                                        </button>
                                        <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 