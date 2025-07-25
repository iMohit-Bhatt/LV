@extends('public.layouts.master')
@section('content')
    <!-- Slider -->
    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('scss/images/hero_bg_3.jpg')"></div>
            <div class="img overlay" style="background-image: url('scss/images/hero_bg_2.jpg')"></div>
            <div class="img overlay" style="background-image: url('scss/images/hero_bg_1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        {{ $mainPage->hero_title ?? 'Easiest way to find your dream home' }}
                    </h1>
                    @if($mainPage->hero_subtitle)
                        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">
                            {{ $mainPage->hero_subtitle }}
                        </p>
                    @endif
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control px-4" placeholder="{{ $mainPage->hero_search_placeholder ?? 'Search Here for properties' }}" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR RECENT PROPERTIES -->
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Our Recent Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a href="{{ route('public.properties') }}" target="_blank" class="btn btn-primary py-3 px-4">View all properties</a>
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
                                    @forelse($recentProperties as $property)
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">{{ $property->name }}</span></div>
                                            <span class="d-block mb-2 text-black-50">{{ ucfirst($property->type) }}</span>
                                            <span class="d-block mb-2 text-black-50">{{ $property->location }}{{ $property->pincode ? ', ' . $property->pincode : '' }}</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ {{ $property->price_range }}</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">{{ $property->bhk_range }}</span>
                                                    </span>
                                                </div>
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-car me-2"></span>
                                                    <span class="caption">{{ $property->area_range }}</span>
                                                </span>
                                            </div>
                                            @if($property->modal_target)
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#{{ $property->modal_target }}">See details</a>
                                            @else
                                            <a class="btn btn-primary py-2 px-3" href="#">See details</a>
                                            @endif
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-12 text-center">
                                        <p>No recent properties available at the moment.</p>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="section">
        <div class="container">
            <div class="row text-left mb-5">
                <div class="col-12">
                    <h2 class="font-weight-bold heading text-primary mb-4">{{ $mainPage->about_title ?? 'About Us' }}</h2>
                </div>
                <div class="col-lg-6">
                    <p class="text-black-50">
                        {{ $mainPage->about_content ?? 'At EkanshRealty, our mission is to guide customers toward making the RIGHT property investments with complete transparency and zero hassle. We collaborate exclusively with a select group of top-tier real estate developers known for their exceptional quality and timely project delivery.' }}
                    </p>
                    <p class="text-black-50">
                        {{ $mainPage->about_journey_content ?? 'Every property we recommend meets rigorous standards for legal compliance, offer integrity, and developer reliability. In fact, we endorse only the properties where we\'d confidently invest our own money.' }}
                    </p>
                    <p class="text-black-50">
                        Over the years, EkanshRealty has become synonymous with trust, professionalism, and excellence in
                        real estate consultation. Our unwavering commitment to high ethical standards and integrity has
                        earned us prestigious awards and established EkanshRealty as a trusted name in the industry.
                    </p>
                </div>
                <div class="col-lg-6">
                    @if($mainPage && $mainPage->about_image)
                        <img src="{{ asset('storage/' . $mainPage->about_image) }}" alt="About Us" class="img-fluid" />
                    @else
                        <img src="{{ asset('scss/images/img_9.png') }}" alt="Image" class="img-fluid" />
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- PROJECTS RESIDENTIAL -->
    <div class="section" id="projectResidential">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Projects Residential</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <ul class="nav nav-pills mb-3" id="project-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="newLaunch-tab" data-bs-toggle="pill"
                                data-bs-target="#newLaunch" type="button" role="tab" aria-controls="newLaunch"
                                aria-selected="true">New Launch</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="underConstruction-tab" data-bs-toggle="pill"
                                data-bs-target="#underConstruction" type="button" role="tab"
                                aria-controls="underConstruction" aria-selected="false">Under Construction</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="possessionSoon-tab" data-bs-toggle="pill"
                                data-bs-target="#possessionSoon" type="button" role="tab"
                                aria-controls="possessionSoon" aria-selected="false">Possession Soon</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="readyToMove-tab" data-bs-toggle="tab"
                                data-bs-target="#readyToMove" type="button" role="tab" aria-controls="readyToMove"
                                aria-selected="false">Ready To Move</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="callUs-tab" data-bs-toggle="tab" data-bs-target="#callUs"
                                type="button" role="tab" aria-controls="callUs" aria-selected="false">Call
                                Us</button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="newLaunch" role="tabpanel"
                            aria-labelledby="newLaunch-tab">
                            <div class="property-slider-wrap">
                                <div class="property-slider">
                                    <!-- .item -->
                                    <div class="property-item">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg1.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Destinaire</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                        Pradesh, 201306</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 1.99 Cr - 2.68
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1900 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire01">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg2.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span>ATS HomeKraft Happy Trails</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                        Pradesh, 201318</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 1.11 Cr - 1.54
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">2BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1165 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire02">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg3.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Kingston
                                                            Heath</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 3.83 Cr - 5.28
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">2350 Sq.Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire03">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg4.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Knightsbridge</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201305</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 15 Cr - 25
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">6BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">6000 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire04">See details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="underConstruction" role="tabpanel"
                            aria-labelledby="underConstruction-tab">
                            <div class="property-slider-wrap">
                                <div class="property-slider">
                                    <!-- .item -->
                                    <div class="property-item">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Le Grandiose</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 1.79 Cr - 3.52
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1625 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire05">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span>ATS One Hamlet</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201301</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 2.65 Cr - 5.1
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1636 Sq. Ft.</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire06">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Picturesque
                                                            Reprieves</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 3.03 Cr - 5.19
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1850 Sq.Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire07">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Pious
                                                            Hideaways</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        Received</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 21 Lac - 2.51
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1400 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire08">See details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="possessionSoon" role="tabpanel"
                            aria-labelledby="possessionSoon-tab">
                            <div class="property-slider-wrap">
                                <div class="property-slider">
                                    <!-- .item -->
                                    <div class="property-item">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg9.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Pious
                                                            Orchards</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 3.29 Cr - 4.48
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">2350 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire09">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg10.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span>ATS Rhapsody</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                        Pradesh, 201318</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 1.98 Cr - 2.64
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1800 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire10">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg11.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Kabana High</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                        Pradesh</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 3.83 Cr - 5.28
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1100 Sq.Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire11">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg12.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">Prateek Canary</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201301</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 2.34 Cr - 8.42
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">5BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1700 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire12">See details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="readyToMove" role="tabpanel" aria-labelledby="readyToMove-tab">
                            <div class="property-slider-wrap">
                                <div class="property-slider">
                                    <!-- .item -->
                                    <div class="property-item">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Le Grandiose</span>
                                                    </div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 1.79 Cr - 3.52
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1625 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire05">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span>ATS One Hamlet</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201301</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 2.65 Cr - 5.1
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1636 Sq. Ft.</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire06">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Picturesque
                                                            Reprieves</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        201310</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 3.03 Cr - 5.19
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-bed me-2"></span>
                                                                <span class="caption">4BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1850 Sq.Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire07">See details</a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="properties.html" class="img">
                                                    <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image"
                                                        class="img-fluid" />
                                                </a>
                                                <div class="property-content">
                                                    <div class="price mb-2"><span class="d-block">ATS Pious
                                                            Hideaways</span></div>
                                                    <span class="d-block mb-2 text-black-50">Residential</span>
                                                    <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                        Received</span>
                                                    <div class="specs mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <b>Price Start&nbsp;<span>@ ₹ 21 Lac - 2.51
                                                                    Cr</span>&nbsp;*Onwards</b>
                                                            <span class="caption"></span>
                                                        </span>

                                                        <div class="d-flex">
                                                            <span class="d-block d-flex align-items-center me-3">
                                                                <span class="icon-home me-2"></span>
                                                                <span class="caption">3BHK</span>
                                                            </span>
                                                        </div>
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-car me-2"></span>
                                                            <span class="caption">1400 Sq. Ft</span>
                                                        </span>
                                                    </div>
                                                    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                        data-bs-target="#aTSDestinaire08">See details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane text-center" id="callUs" role="tabpanel"
                            aria-labelledby="callUs-tab">
                            <h2 class="font-weight-bold text-primary heading mb-5">Send Query Now</h2>
                            <form method="POST" id="contactForm" name="contactForm" action="sendEmail.php"
                                class="mb-5">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name" required />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="number" class="form-control" name="number" id="number"
                                            placeholder="Number" required />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="7"
                                            placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" name="send" value="Send Message"
                                            class="btn btn-primary">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </form>
                            <h5 class="mb-3 font-weight-bold text-primary heading"><a href="tel:7011420563"
                                    class="mr-3"><span class="icon-mobile"></span> +91-7011420563</a> <a
                                    href="tel:8377818657"><span class="icon-mobile"></span> +91-8377818657</a></h5>
                            <h6 class="mb-5">
                                </p><a href="mailto:info@ekanshrealty.com"><span class="icon-envelope-o"></span>
                                    info@ekanshrealty.com</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features -->
    <section class="section features-1">
        <div class="container">
            <div class="row mb-3 align-items-center">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-primary heading">{{ $mainPage->features_title ?? 'What Makes Us Better' }}</h2>
                    <p class="text-black-50">{{ $mainPage->features_subtitle ?? 'Strategic investment begins with thorough research and risk evaluation. We prioritize long-term growth and absolute returns, guiding you to projects that secure your financial future' }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="{{ $mainPage->feature1_icon ?? 'flaticon-house' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->feature1_title ?? 'Expertise' }}</h3>
                        <p>{{ $mainPage->feature1_description ?? 'Your Trusted Real Estate Experts. EkanshRealty\'s experienced team provides the knowledge and guidance you need to make confident investment decisions, securing your ideal property.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="{{ $mainPage->feature2_icon ?? 'flaticon-building' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->feature2_title ?? 'Assistance' }}</h3>
                        <p>{{ $mainPage->feature2_description ?? 'Your Exceptional Journey. At EkanshRealty, we\'re dedicated to providing a seamless and supportive experience, from expert guidance to comprehensive after-sales assistance, ensuring your complete satisfaction.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="{{ $mainPage->feature3_icon ?? 'flaticon-house-3' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->feature3_title ?? 'Trust' }}</h3>
                        <p>{{ $mainPage->feature3_description ?? 'Our Clients, Our Most Valued Asset. We prioritize building strong, collaborative relationships, delivering exceptional experiences that foster trust and long-term satisfaction.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="{{ $mainPage->feature4_icon ?? 'flaticon-house-1' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->feature4_title ?? 'Rera' }}</h3>
                        <p>{{ $mainPage->feature4_description ?? 'Secure Your Future with RERA Assurance. EkanshRealty\'s RERA registration provides you with the confidence and security you need for wise real estate investments.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section services">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-primary heading">{{ $mainPage->services_title ?? 'Our Services' }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="{{ $mainPage->service1_icon ?? 'flaticon-building' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->service1_title ?? 'Buy' }}</h3>
                        <p>{{ $mainPage->service1_description ?? 'Find Your Perfect Home with EkanshRealty. We simplify the buying process, providing expert guidance and a seamless experience every step of the way.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="{{ $mainPage->service2_icon ?? 'flaticon-house-3' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->service2_title ?? 'Sell' }}</h3>
                        <p>{{ $mainPage->service2_description ?? 'Sell Your Property with Confidence. EkanshRealty\'s expert team leverages market knowledge to ensure a hassle-free and rewarding selling experience.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="{{ $mainPage->service3_icon ?? 'flaticon-house-1' }}"></span>
                        <h3 class="mb-3">{{ $mainPage->service3_title ?? 'Lease' }}</h3>
                        <p>{{ $mainPage->service3_description ?? 'Seamless Leasing Solutions. EkanshRealty simplifies residential, commercial, and industrial leasing, providing expert support for landlords and tenants.' }}</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Let's find home that's perfect for you -->
    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        {{ $mainPage->find_home_title ?? "Let's find home that's perfect for you" }}
                    </h2>
                    <p class="text-black-50">
                        {{ $mainPage->find_home_description ?? "Your vision, our expertise. Let's create your perfect home." }}
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        @if($mainPage && $mainPage->find_home_image)
                            <img src="{{ asset('storage/' . $mainPage->find_home_image) }}" alt="Image" class="img-fluid" />
                        @else
                            <img src="{{ asset('scss/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $mainPage->find_home_feature1_title ?? '2M Properties' }}</h3>
                            <p class="text-black-50">
                                {{ $mainPage->find_home_feature1_description ?? 'Luxury redefined. Find your sanctuary with us.' }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $mainPage->find_home_feature2_title ?? 'Top Rated Agents' }}</h3>
                            <p class="text-black-50">
                                {{ $mainPage->find_home_feature2_description ?? 'Your ideal home, simplified. Let\'s explore your options.' }}
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">{{ $mainPage->find_home_feature3_title ?? 'Legit Properties' }}</h3>
                            <p class="text-black-50">
                                {{ $mainPage->find_home_feature3_description ?? 'Find your perfect home, today. Let us help you.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section-counter mt-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary" data-count="{{ $mainPage->buy_properties_count ?? 3298 }}">{{ $mainPage->buy_properties_count ?? 3298 }}</span></span>
                        <span class="caption text-black-50"># of Buy Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary" data-count="{{ $mainPage->sell_properties_count ?? 2181 }}">{{ $mainPage->sell_properties_count ?? 2181 }}</span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary" data-count="{{ $mainPage->all_properties_count ?? 9316 }}">{{ $mainPage->all_properties_count ?? 9316 }}</span></span>
                        <span class="caption text-black-50"># of All Properties</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary" data-count="{{ $mainPage->agents_count ?? 7191 }}">{{ $mainPage->agents_count ?? 7191 }}</span></span>
                        <span class="caption text-black-50"># of Agents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
