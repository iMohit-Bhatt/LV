@extends('public.layouts.master')
@section('content')
    @php
        $aboutUs = \App\Models\AboutUs::where('is_active', true)->first();
    @endphp

    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">{{ $aboutUs->hero_title ?? 'About' }}</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                {{ $aboutUs->hero_title ?? 'About' }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
                        </div>
                    </div>
                    <p class="text-black-50">
                        {{ $aboutUs->about_content ?? 'Welcome to EkanshRealty Infratech! We are a leading real estate company dedicated to creating high-quality homes and commercial spaces. Our goal is to make city living better by building vibrant and sustainable communities. Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life.' }}
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="font-weight-bold heading text-primary">Our Journey</h2>
                        </div>
                    </div>
                    <p class="text-black-50">
                        {{ $aboutUs->journey_content ?? 'Since we started, EkanshRealty Infratech has been focused on quality and innovation. We have become a trusted name in real estate by putting our customers first and delivering excellent projects. Our work shows our passion for creating places where people can live, work, and enjoy life. Join us as we shape the future of real estate. Whether you\'re looking for your dream home or a great place to work, EkanshRealty Infratech is here for you. Explore our projects and see the difference that passion, innovation, and dedication can make.' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Let's find home that's perfect for you -->
    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        {{ $aboutUs->section_title ?? "Let's find home that's perfect for you" }}
                    </h2>
                    <p class="text-black-50">
                        {{ $aboutUs->section_description ?? 'Your vision, our expertise. Let\'s create your perfect home.' }}
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="{{ $aboutUs && $aboutUs->section_image ? asset('storage/' . $aboutUs->section_image) : asset('scss/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h mt-5">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->feature1_title ?? '2M Properties' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->feature1_description ?? 'Luxury redefined. Find your sanctuary with us.' }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->feature2_title ?? 'Top Rated Agents' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->feature2_description ?? 'Your ideal home, simplified. Let\'s explore your options.' }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->feature3_title ?? 'Legit Properties' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->feature3_description ?? 'Find your perfect home, today. Let us help you.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->buy_properties_count ?? 3298 }}">{{ $aboutUs->buy_properties_count ?? 3298 }}</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->sell_properties_count ?? 2181 }}">{{ $aboutUs->sell_properties_count ?? 2181 }}</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->all_properties_count ?? 9316 }}">{{ $aboutUs->all_properties_count ?? 9316 }}</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->agents_count ?? 7191 }}">{{ $aboutUs->agents_count ?? 7191 }}</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->vision_title ?? 'Our Vision' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->vision_content ?? 'We want to be a top real estate developer known for our creative ideas and commitment to the environment. Our aim is to set new standards in the industry by always improving our designs, technology, and customer service.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->mission_title ?? 'Our Mission' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->mission_content ?? 'Our mission is to provide top-quality real estate solutions that make life better for our customers. We are dedicated to building sustainable and high-quality developments that benefit the communities we serve.' }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $aboutUs->values_title ?? 'Our Values' }}</h3>
                            <p class="text-black-50">
                                {{ $aboutUs->values_content ?? 'Quality: We deliver top-quality, sustainable construction with integrity and innovation, prioritizing customer needs and building lasting trust. We are committed to honesty, transparency, and exceeding expectations through environmentally conscious solutions.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ $aboutUs && $aboutUs->gallery_image1 ? asset('storage/' . $aboutUs->gallery_image1) : asset('scss/images/img_1.jpg') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ $aboutUs && $aboutUs->gallery_image2 ? asset('storage/' . $aboutUs->gallery_image2) : asset('scss/images/img_3.jpg') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ $aboutUs && $aboutUs->gallery_image3 ? asset('storage/' . $aboutUs->gallery_image3) : asset('scss/images/img_2.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->gallery_buy_count ?? 2917 }}">{{ $aboutUs->gallery_buy_count ?? 2917 }}</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->gallery_sell_count ?? 3918 }}">{{ $aboutUs->gallery_sell_count ?? 3918 }}</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->gallery_all_count ?? 38928 }}">{{ $aboutUs->gallery_all_count ?? 38928 }}</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="counter-value text-primary" data-value="{{ $aboutUs->gallery_agents_count ?? 1291 }}">{{ $aboutUs->gallery_agents_count ?? 1291 }}</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Immediately set the correct counter values and prevent any interference
        (function() {
            // Set values immediately when script loads
            const counterElements = document.querySelectorAll('.counter-value');
            counterElements.forEach(function(element) {
                const value = element.getAttribute('data-value');
                if (value) {
                    element.textContent = value;
                }
            });
            
            // Also set on DOM ready as backup
            document.addEventListener('DOMContentLoaded', function() {
                const counterElements = document.querySelectorAll('.counter-value');
                counterElements.forEach(function(element) {
                    const value = element.getAttribute('data-value');
                    if (value) {
                        element.textContent = value;
                    }
                });
            });
            
            // Set again after a short delay to override any animations
            setTimeout(function() {
                const counterElements = document.querySelectorAll('.counter-value');
                counterElements.forEach(function(element) {
                    const value = element.getAttribute('data-value');
                    if (value) {
                        element.textContent = value;
                    }
                });
            }, 50);
            
            // Set one more time after a longer delay
            setTimeout(function() {
                const counterElements = document.querySelectorAll('.counter-value');
                counterElements.forEach(function(element) {
                    const value = element.getAttribute('data-value');
                    if (value) {
                        element.textContent = value;
                    }
                });
            }, 200);
        })();
    </script>
@endsection
