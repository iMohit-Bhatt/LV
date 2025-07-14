@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Footer Settings</h4>
                    <p class="card-title-desc">Manage your website footer content and contact information.</p>
                </div>
                <div class="card-body">
                    @if($footer)
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Contact Information</h5>
                                <p><strong>Address:</strong> {{ $footer->address ?? 'Not set' }}</p>
                                <p><strong>Phone:</strong> {{ $footer->phone ?? 'Not set' }}</p>
                                <p><strong>Email:</strong> {{ $footer->email ?? 'Not set' }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Social Media Links</h5>
                                <p><strong>Instagram:</strong> {{ $footer->instagram_url ?? 'Not set' }}</p>
                                <p><strong>Twitter:</strong> {{ $footer->twitter_url ?? 'Not set' }}</p>
                                <p><strong>Facebook:</strong> {{ $footer->facebook_url ?? 'Not set' }}</p>
                                <p><strong>LinkedIn:</strong> {{ $footer->linkedin_url ?? 'Not set' }}</p>
                                <p><strong>Pinterest:</strong> {{ $footer->pinterest_url ?? 'Not set' }}</p>
                                <p><strong>Dribbble:</strong> {{ $footer->dribbble_url ?? 'Not set' }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <h5>Copyright Text</h5>
                                <p>{{ $footer->copyright_text ?? 'Not set' }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <a href="{{ route('admin.footer.edit', $footer->id) }}" class="btn btn-primary">Edit Footer Settings</a>
                            </div>
                        </div>
                    @else
                        <div class="text-center">
                            <p>No footer settings found. Create the first footer configuration.</p>
                            <a href="{{ route('admin.footer.create') }}" class="btn btn-primary">Create Footer Settings</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 