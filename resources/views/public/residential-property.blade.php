@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_3.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Residental Properties</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Property -->
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Desire Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p>
                        <!-- <a
                       href="properties.html"
                       target="_blank"
                       class="btn btn-primary py-3 px-4"
                       >View all properties</a
                     > -->
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
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg1.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Destinaire</span></div>
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
                                                    <span class="caption">1900 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire01">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
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
                                                    <span class="caption">1165 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire02">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg3.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Kingston Heath</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201310</span>
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
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg4.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Knightsbridge</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 20130</span>
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
                                                    <span class="caption">6000 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire04">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Le Grandios</span></div>
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
                                                    <span class="caption">1625 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire05">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS One Hamlet</span></div>
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
                                                    <span class="caption">1636 Sqft..</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire06">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
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
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Pious Hideaways</span></div>
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
                                                    <span class="caption">1400 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire08">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg9.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Pious Orchard</span></div>
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
                                                    <span class="caption">2350 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire09">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg10.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span>ATS Rhapsod</span></div>
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
                                                    <span class="caption">1800 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire10">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/atsimg11.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">ATS Kabana High</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar
                                                Prades</span>
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
                                    <!-- Prateek -->
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/prateek01.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Prateek Canary</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Noida, Uttar Pradesh, 201301</span>
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
                                                    <span class="caption">1700 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#aTSDestinaire12">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/prateekwisteria.jpg') }}" alt="Image"
                                                class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Prateek Wisteria</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Sector 77, Noida, Uttar Pradesh,
                                                India</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 95 Lacs - 2.12 Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>

                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">2BHK</span>
                                                    </span>
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
                                                    <span class="caption">2115 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#prateekwisteria">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/PrateekEdifice.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Prateek Edifice</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Sector 107, Noida, Uttar
                                                Pradesh</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.52 Cr - 7.31 Cr</span>&nbsp;*Onwards</b>
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
                                                    <span class="caption">423 Total Units</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#prateekEdifice">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/godrej01.jpg') }}" alt="Image" class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Godrej Riverine</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50"> Sector 44, Noida, Uttar Pradesh,
                                                201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 6.27 Cr - 10.16
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
                                                </div>
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-car me-2"></span>
                                                    <span class="caption">45000 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#godrej01">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/godrejjardinia02.jpg') }}" alt="Image"
                                                class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Godrej Jardinia</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Plot No. GH-01B, Sector 146, Noida,
                                                Uttar Pradesh 201301</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 3.16 Cr - 5.76 Cr</span>&nbsp;*Onwards</b>
                                                    <span class="caption"></span>
                                                </span>
                                                <div class="d-flex">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">2BHK</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">3BHK</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-home me-2"></span>
                                                        <span class="caption">4BHK</span>
                                                    </span>
                                                </div>
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-car me-2"></span>
                                                    <span class="caption">268765.2 Sqft.</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#godrej02">See details</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <a href="properties.html" class="img">
                                            <img src="{{ asset('scss/images/GodrejMajesty03.jpg') }}" alt="Image"
                                                class="img-fluid" />
                                        </a>
                                        <div class="property-content">
                                            <div class="price mb-2"><span class="d-block">Godrej Majesty</span></div>
                                            <span class="d-block mb-2 text-black-50">Residential</span>
                                            <span class="d-block mb-2 text-black-50">Godrej Majesty, Sector 12, Greater
                                                Noida, Saini, Noida, Uttar Pradesh, India</span>
                                            <div class="specs mb-4">
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <b>Price Start&nbsp;<span>@ ₹ 2.91 Cr - 4.19 Cr</span>&nbsp;*Onwards</b>
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
                                                </div>
                                                <span class="d-block d-flex align-items-center me-3">
                                                    <span class="icon-car me-2"></span>
                                                    <span class="caption">8-acre</span>
                                                </span>
                                            </div>
                                            <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                                                data-bs-target="#godrejMajesty03">See details</a>
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
