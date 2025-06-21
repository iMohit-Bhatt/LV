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
                    <div class="item">
                        <div class="testimonial">
                            <img src="{{ asset('scss/images/person_1-min.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">James Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{ asset('scss/images/person_2-min.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Carol Houston</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{ asset('scss/images/person_3-min.jpg') }}" alt="Image"
                                class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Synthia Cameron</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimonial">
                            <img src="{{ asset('scss/images/person_2.jpg') }}" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                            <h3 class="h5 text-primary">Davin Smith</h3>
                            <p class="text-black-50">Designer, Co-founder</p>

                            <p>
                                Far far away, behind the word mountains, far from the
                                countries Vokalia and Consonantia, there live the blind texts.
                                Separated they live in Bookmarksgrove right at the coast of
                                the Semantics, a large language ocean.
                            </p>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
