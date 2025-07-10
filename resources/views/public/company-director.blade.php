@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Company Director</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Company Director
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->
    <div class="section">
        <div class="container">
            @forelse($directors as $index => $director)
            <div class="row text-left mb-5">
                @if($index % 2 == 0)
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mt-5">{{ $director->name }}</h2>
                    <div class="text-black-50">
                        {!! nl2br(e($director->description)) !!}
                    </div>
                </div>
                <div class="col-lg-6" align="right">
                    <img src="{{ asset('storage/' . $director->image) }}" alt="{{ $director->name }}" class="img-fluid" />
                </div>
                @else
                <div class="col-lg-6" align="left">
                    <img src="{{ asset('storage/' . $director->image) }}" alt="{{ $director->name }}" class="img-fluid" />
                </div>
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mt-5">{{ $director->name }}</h2>
                    <div class="text-black-50">
                        {!! nl2br(e($director->description)) !!}
                    </div>
                </div>
                @endif
            </div>
            @empty
            <div class="row text-left mb-5">
                <div class="col-lg-12 text-center">
                    <p>No company directors available at the moment.</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('scss/images/atsimg12.jpg') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('scss/images/img_11.jpg') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('scss/images/img_13.jpg') }}" alt="Image" class="img-fluid" />
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('scss/images/atsimg11.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">2917</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">3918</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">38928</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">1291</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
