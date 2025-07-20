@extends('admin.layouts.master')

@section('title', 'Main Page Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1><i class="fas fa-home"></i> Main Page Management</h1>
                <div>
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.main-page.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Hero Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-star"></i> Hero Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="hero_title" class="form-label">Hero Title</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" 
                                           value="{{ $mainPage->hero_title ?? 'Easiest way to find your dream home' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="hero_search_placeholder" class="form-label">Search Placeholder</label>
                                    <input type="text" class="form-control" id="hero_search_placeholder" name="hero_search_placeholder" 
                                           value="{{ $mainPage->hero_search_placeholder ?? 'Search Here for properties' }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="hero_subtitle" class="form-label">Hero Subtitle</label>
                            <textarea class="form-control" id="hero_subtitle" name="hero_subtitle" rows="3">{{ $mainPage->hero_subtitle ?? '' }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- About Us Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-info-circle"></i> About Us Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="about_title" class="form-label">About Us Title</label>
                                    <input type="text" class="form-control" id="about_title" name="about_title" 
                                           value="{{ $mainPage->about_title ?? 'About Us' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="about_content" class="form-label">About Content</label>
                                    <textarea class="form-control" id="about_content" name="about_content" rows="4">{{ $mainPage->about_content ?? 'At EkanshRealty, our mission is to guide customers toward making the RIGHT property investments with complete transparency and zero hassle. We collaborate exclusively with a select group of top-tier real estate developers known for their exceptional quality and timely project delivery.' }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="about_journey_content" class="form-label">Journey Content</label>
                                    <textarea class="form-control" id="about_journey_content" name="about_journey_content" rows="4">{{ $mainPage->about_journey_content ?? 'Every property we recommend meets rigorous standards for legal compliance, offer integrity, and developer reliability. In fact, we endorse only the properties where we\'d confidently invest our own money.' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="about_image" class="form-label">About Image</label>
                                    @if($mainPage->about_image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $mainPage->about_image) }}" alt="About Image" class="img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control" id="about_image" name="about_image" accept="image/*">
                                    <small class="form-text text-muted">Upload a new image to replace the current one</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-star"></i> Features Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="features_title" class="form-label">Features Title</label>
                                    <input type="text" class="form-control" id="features_title" name="features_title" 
                                           value="{{ $mainPage->features_title ?? 'What Makes Us Better' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="features_subtitle" class="form-label">Features Subtitle</label>
                                    <textarea class="form-control" id="features_subtitle" name="features_subtitle" rows="3">{{ $mainPage->features_subtitle ?? 'Strategic investment begins with thorough research and risk evaluation. We prioritize long-term growth and absolute returns, guiding you to projects that secure your financial future' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 1 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature1_title" class="form-label">Feature 1 Title</label>
                                    <input type="text" class="form-control" id="feature1_title" name="feature1_title" 
                                           value="{{ $mainPage->feature1_title ?? 'Expertise' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature1_icon" class="form-label">Feature 1 Icon</label>
                                    <input type="text" class="form-control" id="feature1_icon" name="feature1_icon" 
                                           value="{{ $mainPage->feature1_icon ?? 'flaticon-house' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature1_description" class="form-label">Feature 1 Description</label>
                                    <textarea class="form-control" id="feature1_description" name="feature1_description" rows="3">{{ $mainPage->feature1_description ?? 'Your Trusted Real Estate Experts. EkanshRealty\'s experienced team provides the knowledge and guidance you need to make confident investment decisions, securing your ideal property.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature2_title" class="form-label">Feature 2 Title</label>
                                    <input type="text" class="form-control" id="feature2_title" name="feature2_title" 
                                           value="{{ $mainPage->feature2_title ?? 'Assistance' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature2_icon" class="form-label">Feature 2 Icon</label>
                                    <input type="text" class="form-control" id="feature2_icon" name="feature2_icon" 
                                           value="{{ $mainPage->feature2_icon ?? 'flaticon-building' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature2_description" class="form-label">Feature 2 Description</label>
                                    <textarea class="form-control" id="feature2_description" name="feature2_description" rows="3">{{ $mainPage->feature2_description ?? 'Your Exceptional Journey. At EkanshRealty, we\'re dedicated to providing a seamless and supportive experience, from expert guidance to comprehensive after-sales assistance, ensuring your complete satisfaction.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature3_title" class="form-label">Feature 3 Title</label>
                                    <input type="text" class="form-control" id="feature3_title" name="feature3_title" 
                                           value="{{ $mainPage->feature3_title ?? 'Trust' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature3_icon" class="form-label">Feature 3 Icon</label>
                                    <input type="text" class="form-control" id="feature3_icon" name="feature3_icon" 
                                           value="{{ $mainPage->feature3_icon ?? 'flaticon-house-3' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature3_description" class="form-label">Feature 3 Description</label>
                                    <textarea class="form-control" id="feature3_description" name="feature3_description" rows="3">{{ $mainPage->feature3_description ?? 'Our Clients, Our Most Valued Asset. We prioritize building strong, collaborative relationships, delivering exceptional experiences that foster trust and long-term satisfaction.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature4_title" class="form-label">Feature 4 Title</label>
                                    <input type="text" class="form-control" id="feature4_title" name="feature4_title" 
                                           value="{{ $mainPage->feature4_title ?? 'Rera' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature4_icon" class="form-label">Feature 4 Icon</label>
                                    <input type="text" class="form-control" id="feature4_icon" name="feature4_icon" 
                                           value="{{ $mainPage->feature4_icon ?? 'flaticon-house-1' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="feature4_description" class="form-label">Feature 4 Description</label>
                                    <textarea class="form-control" id="feature4_description" name="feature4_description" rows="3">{{ $mainPage->feature4_description ?? 'Secure Your Future with RERA Assurance. EkanshRealty\'s RERA registration provides you with the confidence and security you need for wise real estate investments.' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-cogs"></i> Services Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="services_title" class="form-label">Services Title</label>
                            <input type="text" class="form-control" id="services_title" name="services_title" 
                                   value="{{ $mainPage->services_title ?? 'Our Services' }}">
                        </div>

                        <!-- Service 1 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service1_title" class="form-label">Service 1 Title</label>
                                    <input type="text" class="form-control" id="service1_title" name="service1_title" 
                                           value="{{ $mainPage->service1_title ?? 'Buy' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service1_icon" class="form-label">Service 1 Icon</label>
                                    <input type="text" class="form-control" id="service1_icon" name="service1_icon" 
                                           value="{{ $mainPage->service1_icon ?? 'flaticon-building' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service1_description" class="form-label">Service 1 Description</label>
                                    <textarea class="form-control" id="service1_description" name="service1_description" rows="3">{{ $mainPage->service1_description ?? 'Find Your Perfect Home with EkanshRealty. We simplify the buying process, providing expert guidance and a seamless experience every step of the way.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service2_title" class="form-label">Service 2 Title</label>
                                    <input type="text" class="form-control" id="service2_title" name="service2_title" 
                                           value="{{ $mainPage->service2_title ?? 'Sell' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service2_icon" class="form-label">Service 2 Icon</label>
                                    <input type="text" class="form-control" id="service2_icon" name="service2_icon" 
                                           value="{{ $mainPage->service2_icon ?? 'flaticon-house-3' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service2_description" class="form-label">Service 2 Description</label>
                                    <textarea class="form-control" id="service2_description" name="service2_description" rows="3">{{ $mainPage->service2_description ?? 'Sell Your Property with Confidence. EkanshRealty\'s expert team leverages market knowledge to ensure a hassle-free and rewarding selling experience.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service3_title" class="form-label">Service 3 Title</label>
                                    <input type="text" class="form-control" id="service3_title" name="service3_title" 
                                           value="{{ $mainPage->service3_title ?? 'Lease' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service3_icon" class="form-label">Service 3 Icon</label>
                                    <input type="text" class="form-control" id="service3_icon" name="service3_icon" 
                                           value="{{ $mainPage->service3_icon ?? 'flaticon-house-1' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="service3_description" class="form-label">Service 3 Description</label>
                                    <textarea class="form-control" id="service3_description" name="service3_description" rows="3">{{ $mainPage->service3_description ?? 'Seamless Leasing Solutions. EkanshRealty simplifies residential, commercial, and industrial leasing, providing expert support for landlords and tenants.' }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Let's Find Home Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-home"></i> "Let's Find Home" Section</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="find_home_title" class="form-label">Section Title</label>
                                    <input type="text" class="form-control" id="find_home_title" name="find_home_title" 
                                           value="{{ $mainPage->find_home_title ?? 'Let\'s find home that\'s perfect for you' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="find_home_description" class="form-label">Section Description</label>
                                    <textarea class="form-control" id="find_home_description" name="find_home_description" rows="3">{{ $mainPage->find_home_description ?? 'Your vision, our expertise. Let\'s create your perfect home.' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="find_home_image" class="form-label">Section Image</label>
                                    @if($mainPage->find_home_image)
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $mainPage->find_home_image) }}" alt="Find Home Image" class="img-thumbnail" style="max-width: 200px;">
                                        </div>
                                    @endif
                                    <input type="file" class="form-control" id="find_home_image" name="find_home_image" accept="image/*">
                                    <small class="form-text text-muted">Upload a new image to replace the current one</small>
                                </div>
                            </div>
                        </div>

                        <!-- Find Home Features -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="find_home_feature1_title" class="form-label">Feature 1 Title</label>
                                    <input type="text" class="form-control" id="find_home_feature1_title" name="find_home_feature1_title" 
                                           value="{{ $mainPage->find_home_feature1_title ?? '2M Properties' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="find_home_feature1_description" class="form-label">Feature 1 Description</label>
                                    <textarea class="form-control" id="find_home_feature1_description" name="find_home_feature1_description" rows="3">{{ $mainPage->find_home_feature1_description ?? 'Luxury redefined. Find your sanctuary with us.' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="find_home_feature2_title" class="form-label">Feature 2 Title</label>
                                    <input type="text" class="form-control" id="find_home_feature2_title" name="find_home_feature2_title" 
                                           value="{{ $mainPage->find_home_feature2_title ?? 'Top Rated Agents' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="find_home_feature2_description" class="form-label">Feature 2 Description</label>
                                    <textarea class="form-control" id="find_home_feature2_description" name="find_home_feature2_description" rows="3">{{ $mainPage->find_home_feature2_description ?? 'Your ideal home, simplified. Let\'s explore your options.' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="find_home_feature3_title" class="form-label">Feature 3 Title</label>
                                    <input type="text" class="form-control" id="find_home_feature3_title" name="find_home_feature3_title" 
                                           value="{{ $mainPage->find_home_feature3_title ?? 'Legit Properties' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="find_home_feature3_description" class="form-label">Feature 3 Description</label>
                                    <textarea class="form-control" id="find_home_feature3_description" name="find_home_feature3_description" rows="3">{{ $mainPage->find_home_feature3_description ?? 'Find your perfect home, today. Let us help you.' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Counters -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="buy_properties_count" class="form-label">Buy Properties Count</label>
                                    <input type="number" class="form-control" id="buy_properties_count" name="buy_properties_count" 
                                           value="{{ $mainPage->buy_properties_count ?? 3298 }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="sell_properties_count" class="form-label">Sell Properties Count</label>
                                    <input type="number" class="form-control" id="sell_properties_count" name="sell_properties_count" 
                                           value="{{ $mainPage->sell_properties_count ?? 2181 }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="all_properties_count" class="form-label">All Properties Count</label>
                                    <input type="number" class="form-control" id="all_properties_count" name="all_properties_count" 
                                           value="{{ $mainPage->all_properties_count ?? 9316 }}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="agents_count" class="form-label">Agents Count</label>
                                    <input type="number" class="form-control" id="agents_count" name="agents_count" 
                                           value="{{ $mainPage->agents_count ?? 7191 }}" min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fas fa-toggle-on"></i> Status</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                                   {{ $mainPage->is_active ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Active (Show this content on the main page)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-save"></i> Update Main Page Content
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 