@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('scss/images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Contact Us</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Contact
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-2">
                            <i class="icon-room"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p>
                                Noida, Uttar Pradesh, India
                            </p>
                        </div>

                        <div class="open-hours mt-4">
                            <i class="icon-clock-o"></i>
                            <h4 class="mb-2">Open Hours:</h4>
                            <p>
                                Monday-Sunday:<br />
                                11:00 AM - 07:00 PM
                            </p>
                        </div>

                        <div class="email mt-4">
                            <i class="icon-envelope"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p>info@ekanshrealty.com</p>
                        </div>

                        <div class="phone mt-4">
                            <i class="icon-phone"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p>+91 8377818657</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <form method="POST" id="contactForm" name="contactForm" action="sendEmail.php">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                    required />
                            </div>
                            <div class="col-6 mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required />
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
                                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                            </div>

                            <div class="col-12">
                                <input type="submit" name="send" value="Send Message" class="btn btn-primary">
                                <div class="submitting"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.untree_co-section -->
@endsection
