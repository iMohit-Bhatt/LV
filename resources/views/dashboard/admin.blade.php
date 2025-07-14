@extends('layouts.master')
@section('dashboard')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Real Estate Admin Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">{{ date('M d') }}</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->  
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->

        <!-- Admin Management Cards -->
        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Blog Management</p>
                                        <h4 class="mb-0">Manage Posts</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-blog fa-2x text-primary"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-primary btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Blog
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Property Management</p>
                                        <h4 class="mb-0">Manage Properties</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-home fa-2x text-warning"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.property.index') }}" class="btn btn-warning btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Properties
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Team Management</p>
                                        <h4 class="mb-0">Manage Team</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-users fa-2x text-info"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.team-member.index') }}" class="btn btn-info btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Team
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Company Directors</p>
                                        <h4 class="mb-0">Manage Directors</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-user-tie fa-2x text-success"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.company-director.index') }}" class="btn btn-success btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Directors
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row of Management Cards -->
        <div class="row">
            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Testimonial Management</p>
                                        <h4 class="mb-0">Manage Testimonials</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-star fa-2x text-warning"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-warning btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Testimonials
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Footer Settings</p>
                                        <h4 class="mb-0">Manage Footer</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-cog fa-2x text-secondary"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.footer.index') }}" class="btn btn-secondary btn-sm w-100">
                                    <i class="fas fa-cog"></i> Manage Footer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Submissions Card -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Contact Submissions</p>
                                        <h4 class="mb-0">View Messages</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-envelope fa-2x text-danger"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.contact-submissions.index') }}" class="btn btn-danger btn-sm w-100">
                                    <i class="fas fa-eye"></i> View Submissions
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted mb-1">Website</p>
                                        <h4 class="mb-0">View Site</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 align-self-center text-end">
                                <i class="fas fa-globe fa-2x text-secondary"></i>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('/') }}" class="btn btn-secondary btn-sm w-100" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Visit Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Quick Overview</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-primary">{{ \App\Models\Blog::count() }}</h3>
                                    <p class="text-muted">Total Blog Posts</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-warning">{{ \App\Models\Property::count() }}</h3>
                                    <p class="text-muted">Properties</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-info">{{ \App\Models\TeamMember::count() }}</h3>
                                    <p class="text-muted">Team Members</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-success">{{ \App\Models\CompanyDirector::count() }}</h3>
                                    <p class="text-muted">Company Directors</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-danger">{{ \App\Models\Contact::count() }}</h3>
                                    <p class="text-muted">Contact Submissions</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-dark">{{ \App\Models\TeamMember::where('is_active', true)->count() }}</h3>
                                    <p class="text-muted">Active Team Members</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-primary">{{ \App\Models\CompanyDirector::where('is_active', true)->count() }}</h3>
                                    <p class="text-muted">Active Directors</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h3 class="text-warning">{{ \App\Models\Testimonial::where('is_active', true)->count() }}</h3>
                                    <p class="text-muted">Active Testimonials</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- container -->
</div>
@endsection