@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/leasingcorporate.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Leasing Corporate</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Leasing Corporate -->
    <div class="section">
        <div class="container">
            <div class="row d-flex mt-5">
                <div class="col-lg-4"><img src="{{ asset('scss/images/img_11.jpg') }}" alt="Your Partner in Strategic Property Investment"
                        class="img-fluid" /></div>
                <div class="col-lg-8">
                    <p class="text-black mb-3 mt-5"><b>Your Gateway to Strategic Commercial Locations in Delhi/NCR:
                        </b>Unlock the full potential of your business with Ekansh Realty's extensive commercial leasing
                        services across the dynamic Delhi/NCR region. We understand that the right location is paramount to
                        your success, offering unparalleled visibility, accessibility, and connectivity. Our dedicated team
                        meticulously curates a diverse portfolio of prime commercial spaces, ranging from bustling business
                        districts to strategically positioned corporate hubs. We go beyond simply listing properties; we act
                        as your trusted partner in identifying the ideal location that aligns perfectly with your
                        operational needs, brand identity, and growth aspirations within this thriving economic landscape.
                    </p>
                    <p class="text-black mb-3"><b>Tailored Leasing Solutions Designed for Your Business Success: </b>At
                        Ekansh Realty, we recognize that every business has unique requirements. Our approach to commercial
                        leasing is centered around providing truly tailored solutions. Our experienced leasing professionals
                        take the time to understand the intricacies of your business operations, including your space
                        requirements, budget considerations, and logistical needs. Whether you are a burgeoning startup
                        seeking a flexible workspace or an established corporation requiring a large-scale headquarters, we
                        leverage our in-depth market knowledge and extensive network to present you with a curated selection
                        of office spaces that precisely match your criteria, ensuring optimal functionality and efficiency.
                    </p>
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
                                            <img src="{{ asset('scss/images/atsimg1.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Destinaire <br /><br /></span>
                                            </div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh,
                                                201306</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.99 Cr - 2.68 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg2.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS HomeKraft Happy Trails</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh,
                                                201318</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.11 Cr - 1.54 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg3.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Kingston Heath
                                                    <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310
                                                <br /><br /></span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.83 Cr - 5.28 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg4.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Knightsbridge
                                                    <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                201305<br /><br /></span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 15 Cr - 25 Cr</span>&nbsp;*Onwards</b>
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

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Le
                                                    Grandiose<br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.79 Cr - 3.52 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS One Hamlet <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 2.65 Cr - 5.1 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Picturesque Reprieves</span>
                                            </div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.03 Cr - 5.19 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Pious Hideaways
                                                    <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, Received</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 21 Lac - 2.51 Cr</span>&nbsp;*Onwards</b>
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
                            <!-- .item -->
                            <div class="property-item">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg9.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Pious
                                                    Orchards<br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.29 Cr - 4.48 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg10.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS Rhapsody<br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh,
                                                201318</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.98 Cr - 2.64 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg11.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Kabana High
                                                    <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                Pradesh<br /><br /></span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.83 Cr - 5.28 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg12.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Prateek Canary
                                                    <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh,
                                                201301<br /><br /></span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 2.34 Cr - 8.42 Cr</span>&nbsp;*Onwards</b>
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

                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Le
                                                    Grandiose<br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 1.79 Cr - 3.52 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS One Hamlet <br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 2.65 Cr - 5.1 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Picturesque Reprieves</span>
                                            </div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.03 Cr - 5.19 Cr</span>&nbsp;*Onwards</b>
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
                                            <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Pious
                                                    Hideaways<br /><br /></span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, Received</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 21 Lac - 2.51 Cr</span>&nbsp;*Onwards</b>
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
