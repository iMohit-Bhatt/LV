@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Commercial Properties</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR RECENT PROPERTIES -->
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Office Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="properties.html" target="_blank" class="btn btn-primary py-3 px-4">View all properties</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            <!-- .item -->
                            <div class="property-item">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/onefng-1.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ONE FNG</span></div>
                                            <span class="d-block mb-2 text-black-50">Commercial</span>
                                            <span class="d-block mb-2 text-black-50">Sector 142 Metro Noida, Greater Noida
                                                Expressway, Uttar Pradesh, 201305</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.1 Cr - 5.5 Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">1000 Sqft</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">6000 Sqft</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#oneFNG01">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/m3m-1.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>M3M The Line</span></div>
                                            <p>Premium Retail Shops</p>
                                            <span class="d-block mb-2 text-black-50">Commercial</span>
                                            <span class="d-block mb-2 text-black-50">Sector- 72, Central Noida,
                                                201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 72 Lacs - 1.6 Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">750 Sqft</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">3000 Sqft</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#m3m01">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg13.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Kabana High</span></div>
                                            <span class="d-block mb-2 text-black-50">Premium Retail Shops</span>
                                            <span class="d-block mb-2 text-black-50">Sector-4, Greater Noida West,
                                                201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ ---- Cr - ---- Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">525 Sqft</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">1100 Sqft</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSKabana13">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/ace01.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ACE YXP</span></div>
                                            <span class="d-block mb-2 text-black-50">542 Shop/Studio</span>
                                            <span class="d-block mb-2 text-black-50">Sector 22D Yamuna Expressway, Noida,
                                                201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 15 Cr - 25 Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">500 Sqft</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">700 Sqft</span>
                                                    </span>
                                                </div>
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-car me-2"></span>
                                                    <span class="caption">172062 SqFt</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#ace01">See details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
