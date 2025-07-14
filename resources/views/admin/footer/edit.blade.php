@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Footer Settings</h4>
                    <p class="card-title-desc">Update footer contact information and social media links.</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.footer.update', $footer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Contact Information</h5>
                                
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $footer->address) }}">
                                    @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $footer->phone) }}">
                                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $footer->email) }}">
                                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Social Media Links</h5>
                                
                                <div class="mb-3">
                                    <label for="instagram_url" class="form-label">Instagram URL</label>
                                    <input type="text" class="form-control @error('instagram_url') is-invalid @enderror" id="instagram_url" name="instagram_url" value="{{ old('instagram_url', $footer->instagram_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('instagram_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="twitter_url" class="form-label">Twitter URL</label>
                                    <input type="text" class="form-control @error('twitter_url') is-invalid @enderror" id="twitter_url" name="twitter_url" value="{{ old('twitter_url', $footer->twitter_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('twitter_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="facebook_url" class="form-label">Facebook URL</label>
                                    <input type="text" class="form-control @error('facebook_url') is-invalid @enderror" id="facebook_url" name="facebook_url" value="{{ old('facebook_url', $footer->facebook_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('facebook_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                                    <input type="text" class="form-control @error('linkedin_url') is-invalid @enderror" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url', $footer->linkedin_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('linkedin_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="pinterest_url" class="form-label">Pinterest URL</label>
                                    <input type="text" class="form-control @error('pinterest_url') is-invalid @enderror" id="pinterest_url" name="pinterest_url" value="{{ old('pinterest_url', $footer->pinterest_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('pinterest_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="dribbble_url" class="form-label">Dribbble URL</label>
                                    <input type="text" class="form-control @error('dribbble_url') is-invalid @enderror" id="dribbble_url" name="dribbble_url" value="{{ old('dribbble_url', $footer->dribbble_url) }}" placeholder="Enter URL or # for placeholder">
                                    @error('dribbble_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-12">
                                <h5>Copyright Information</h5>
                                <div class="mb-3">
                                    <label for="copyright_text" class="form-label">Copyright Text</label>
                                    <textarea class="form-control @error('copyright_text') is-invalid @enderror" id="copyright_text" name="copyright_text" rows="3">{{ old('copyright_text', $footer->copyright_text) }}</textarea>
                                    @error('copyright_text')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    <small class="form-text text-muted">Leave empty to use default copyright text.</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $footer->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">Active</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Footer Settings</button>
                        <a href="{{ route('admin.footer.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 