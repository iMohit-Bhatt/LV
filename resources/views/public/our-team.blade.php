@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Our Team</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-testimonials bg-light">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6">
                    <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                        The Team
                    </h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev">Prev</span>

                        <span class="next" data-controls="next">Next</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
            </div>
            <div class="testimonial-slider-wrap">
                <div class="testimonial-slider">
                    @forelse($teamMembers as $member)
                    <div class="item">
                        <div class="testimonial">
                            <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">{{ $member->name }}</h3>
                            <p class="text-black-50">{{ $member->position }}</p>

                            <p>
                                {{ $member->description }}
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                @if($member->twitter_url)
                                <li class="list-inline-item">
                                    <a href="{{ $member->twitter_url }}" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                                @endif
                                @if($member->facebook_url)
                                <li class="list-inline-item">
                                    <a href="{{ $member->facebook_url }}" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                                @endif
                                @if($member->linkedin_url)
                                <li class="list-inline-item">
                                    <a href="{{ $member->linkedin_url }}" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                                @endif
                                @if($member->instagram_url)
                                <li class="list-inline-item">
                                    <a href="{{ $member->instagram_url }}" target="_blank"><span class="icon-instagram"></span></a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    @empty
                    <div class="item">
                        <div class="testimonial text-center">
                            <p>No team members available at the moment.</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
