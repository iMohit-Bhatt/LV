@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage About Us Content</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.about-us.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Hero Section -->
                            <div class="col-md-12">
                                <h5 class="mb-3">Hero Section</h5>
                                <div class="form-group">
                                    <label for="hero_title">Hero Title</label>
                                    <input type="text" class="form-control" id="hero_title" name="hero_title" 
                                           value="{{ $aboutUs->hero_title ?? 'About' }}" required>
                                </div>
                            </div>

                            <!-- About Content -->
                            <div class="col-md-6">
                                <h5 class="mb-3 mt-4">About Content</h5>
                                <div class="form-group">
                                    <label for="about_content">About Content</label>
                                    <textarea class="form-control" id="about_content" name="about_content" rows="6" required>{{ $aboutUs->about_content ?? 'Welcome to EkanshRealty Infratech! We are a leading real estate company dedicated to creating high-quality homes and commercial spaces. Our goal is to make city living better by building vibrant and sustainable communities. Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life.' }}</textarea>
                                </div>
                            </div>

                            <!-- Journey Content -->
                            <div class="col-md-6">
                                <h5 class="mb-3 mt-4">Journey Content</h5>
                                <div class="form-group">
                                    <label for="journey_content">Journey Content</label>
                                    <textarea class="form-control" id="journey_content" name="journey_content" rows="6" required>{{ $aboutUs->journey_content ?? 'Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life. Join us as we shape the future of real estate. Whether you\'re looking for your dream home or a great place to work, EkanshRealty Infratech is here for you. Explore our projects and see the difference that passion, innovation, and dedication can make.' }}</textarea>
                                </div>
                            </div>

                            <!-- Section Content -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Section Content</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="section_title">Section Title</label>
                                            <input type="text" class="form-control" id="section_title" name="section_title" 
                                                   value="{{ $aboutUs->section_title ?? 'Let\'s find home that\'s perfect for you' }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="section_image">Section Image</label>
                                            <input type="file" class="form-control" id="section_image" name="section_image" accept="image/*">
                                            @if($aboutUs && $aboutUs->section_image)
                                                <small class="text-muted">Current: {{ basename($aboutUs->section_image) }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_description">Section Description</label>
                                    <textarea class="form-control" id="section_description" name="section_description" rows="3" required>{{ $aboutUs->section_description ?? 'Your vision, our expertise. Let\'s create your perfect home.' }}</textarea>
                                </div>
                            </div>

                            <!-- Features -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Features</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="feature1_title">Feature 1 Title</label>
                                            <input type="text" class="form-control" id="feature1_title" name="feature1_title" 
                                                   value="{{ $aboutUs->feature1_title ?? '2M Properties' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="feature1_description">Feature 1 Description</label>
                                            <textarea class="form-control" id="feature1_description" name="feature1_description" rows="3" required>{{ $aboutUs->feature1_description ?? 'Luxury redefined. Find your sanctuary with us.' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="feature2_title">Feature 2 Title</label>
                                            <input type="text" class="form-control" id="feature2_title" name="feature2_title" 
                                                   value="{{ $aboutUs->feature2_title ?? 'Top Rated Agents' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="feature2_description">Feature 2 Description</label>
                                            <textarea class="form-control" id="feature2_description" name="feature2_description" rows="3" required>{{ $aboutUs->feature2_description ?? 'Your ideal home, simplified. Let\'s explore your options.' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="feature3_title">Feature 3 Title</label>
                                            <input type="text" class="form-control" id="feature3_title" name="feature3_title" 
                                                   value="{{ $aboutUs->feature3_title ?? 'Legit Properties' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="feature3_description">Feature 3 Description</label>
                                            <textarea class="form-control" id="feature3_description" name="feature3_description" rows="3" required>{{ $aboutUs->feature3_description ?? 'Find your perfect home, today. Let us help you.' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Counter Stats -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Counter Statistics</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="buy_properties_count">Buy Properties Count</label>
                                            <input type="number" class="form-control" id="buy_properties_count" name="buy_properties_count" 
                                                   value="{{ $aboutUs->buy_properties_count ?? 3298 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="sell_properties_count">Sell Properties Count</label>
                                            <input type="number" class="form-control" id="sell_properties_count" name="sell_properties_count" 
                                                   value="{{ $aboutUs->sell_properties_count ?? 2181 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="all_properties_count">All Properties Count</label>
                                            <input type="number" class="form-control" id="all_properties_count" name="all_properties_count" 
                                                   value="{{ $aboutUs->all_properties_count ?? 9316 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="agents_count">Agents Count</label>
                                            <input type="number" class="form-control" id="agents_count" name="agents_count" 
                                                   value="{{ $aboutUs->agents_count ?? 7191 }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vision, Mission, Values -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Vision, Mission & Values</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="vision_title">Vision Title</label>
                                            <input type="text" class="form-control" id="vision_title" name="vision_title" 
                                                   value="{{ $aboutUs->vision_title ?? 'Our Vision' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="vision_content">Vision Content</label>
                                            <textarea class="form-control" id="vision_content" name="vision_content" rows="4" required>{{ $aboutUs->vision_content ?? 'We want to be a top real estate developer known for our creative ideas and commitment to the environment. Our aim is to set new standards in the industry by always improving our designs, technology, and customer service.' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mission_title">Mission Title</label>
                                            <input type="text" class="form-control" id="mission_title" name="mission_title" 
                                                   value="{{ $aboutUs->mission_title ?? 'Our Mission' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="mission_content">Mission Content</label>
                                            <textarea class="form-control" id="mission_content" name="mission_content" rows="4" required>{{ $aboutUs->mission_content ?? 'Our mission is to provide top-quality real estate solutions that make life better for our customers. We are dedicated to building sustainable and high-quality developments that benefit the communities we serve.' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="values_title">Values Title</label>
                                            <input type="text" class="form-control" id="values_title" name="values_title" 
                                                   value="{{ $aboutUs->values_title ?? 'Our Values' }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="values_content">Values Content</label>
                                            <textarea class="form-control" id="values_content" name="values_content" rows="4" required>{{ $aboutUs->values_content ?? 'Quality: We deliver top-quality, sustainable construction with integrity and innovation, prioritizing customer needs and building lasting trust. We are committed to honesty, transparency, and exceeding expectations through environmentally conscious solutions.' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Images -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Gallery Images</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gallery_image1">Gallery Image 1</label>
                                            <input type="file" class="form-control" id="gallery_image1" name="gallery_image1" accept="image/*">
                                            @if($aboutUs && $aboutUs->gallery_image1)
                                                <small class="text-muted">Current: {{ basename($aboutUs->gallery_image1) }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gallery_image2">Gallery Image 2</label>
                                            <input type="file" class="form-control" id="gallery_image2" name="gallery_image2" accept="image/*">
                                            @if($aboutUs && $aboutUs->gallery_image2)
                                                <small class="text-muted">Current: {{ basename($aboutUs->gallery_image2) }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="gallery_image3">Gallery Image 3</label>
                                            <input type="file" class="form-control" id="gallery_image3" name="gallery_image3" accept="image/*">
                                            @if($aboutUs && $aboutUs->gallery_image3)
                                                <small class="text-muted">Current: {{ basename($aboutUs->gallery_image3) }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery Counter Stats -->
                            <div class="col-md-12">
                                <h5 class="mb-3 mt-4">Gallery Counter Statistics</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gallery_buy_count">Gallery Buy Count</label>
                                            <input type="number" class="form-control" id="gallery_buy_count" name="gallery_buy_count" 
                                                   value="{{ $aboutUs->gallery_buy_count ?? 2917 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gallery_sell_count">Gallery Sell Count</label>
                                            <input type="number" class="form-control" id="gallery_sell_count" name="gallery_sell_count" 
                                                   value="{{ $aboutUs->gallery_sell_count ?? 3918 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gallery_all_count">Gallery All Count</label>
                                            <input type="number" class="form-control" id="gallery_all_count" name="gallery_all_count" 
                                                   value="{{ $aboutUs->gallery_all_count ?? 38928 }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gallery_agents_count">Gallery Agents Count</label>
                                            <input type="number" class="form-control" id="gallery_agents_count" name="gallery_agents_count" 
                                                   value="{{ $aboutUs->gallery_agents_count ?? 1291 }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
                                               {{ ($aboutUs && $aboutUs->is_active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">Active</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 