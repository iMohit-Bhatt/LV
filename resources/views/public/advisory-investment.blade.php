@extends('public.layouts.master')
@section('content')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('scss/images/advisoryinvestment.jpg') }}')">
         <div class="container">
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-9 text-center mt-5">
                  <h1 class="heading" data-aos="fade-up">Advisory Investment</h1>
               </div>
            </div>
         </div>
      </div>
      <!-- Advisory Investment -->
      <div class="section">
         <div class="container">
          <div class="row d-flex mt-5">
            <div class="col-lg-4"><img src="{{ asset('scss/images/img_10.jpg') }}" alt="Your Partner in Strategic Property Investment" class="img-fluid" /></div>
            <div class="col-lg-8">
              <p class="text-black mb-3 mt-3"><b>Your Partner in Strategic Property Investment: </b>At EkanshRealty, we understand that real estate investment is a significant step towards securing your financial future. Our team of experienced advisors is dedicated to providing you with the expert guidance needed to navigate the complexities of the property market. We go beyond simply showing listings; we become your trusted partner in making informed decisions that align with your individual financial aspirations. By taking the time to understand your unique circumstances, risk tolerance, and long-term objectives, we ensure that every investment recommendation is carefully considered and strategically sound.</p>
              <p class="text-black mb-3"><b>Tailored Strategies for Sustainable Growth: </b>Our approach to real estate investment is rooted in thorough analysis and the creation of customized strategies. We delve deep into market trends, property values, and potential growth areas to identify opportunities that offer sustainable long-term appreciation. Recognizing that diversification is key to mitigating risk and maximizing returns, we work with you to build a balanced real estate portfolio. This may involve exploring various property types, locations, and investment horizons, all carefully curated to align with your specific financial goals and timelines.</p>
              <p class="text-black mb-3"><b>Achieving Your Financial Goals Through Property Ownership: </b>Ultimately, our aim at EkanshRealty is to empower you to achieve your financial goals through strategic property ownership. We believe that real estate, when approached with informed decision-making and a long-term perspective, can be a powerful tool for wealth creation and financial security. Our advisors remain by your side throughout your investment journey, providing ongoing support and adapting strategies as needed to ensure you stay on track to realize your vision of a secure and prosperous future through your real estate investments.</p>
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
              <a
                href="properties.html"
                target="_blank"
                class="btn btn-primary py-3 px-4"
                >View all properties</a
              >
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
                        <div class="price mb-2"><span class="d-block">ATS Destinaire <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh, 201306</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire01">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg2.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span>ATS HomeKraft Happy Trails</span></div>
                          <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh, 201318</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire02">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg3.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Kingston Heath <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, 201310 <br/><br/></span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire03">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg4.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Knightsbridge <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, 201305<br/><br/></span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire04">See details</a >                       
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Le Grandiose<br/><br/></span></div>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire05">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span>ATS One Hamlet <br/><br/></span></div>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire06">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Picturesque Reprieves</span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, 201310</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire07">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Pious Hideaways <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, Received</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire08">See details</a >                       
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
                        <div class="price mb-2"><span class="d-block">ATS Pious Orchards<br/><br/></span></div>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire09">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg10.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span>ATS Rhapsody<br/><br/></span></div>
                          <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50">Greater Noida West, Uttar Pradesh, 201318</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire10">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg11.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Kabana High <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Greater Noida West, Uttar Pradesh<br/><br/></span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire11">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg12.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">Prateek Canary <br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, 201301<br/><br/></span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire12">See details</a >                       
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg5.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Le Grandiose<br/><br/></span></div>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire05">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg6.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span>ATS One Hamlet <br/><br/></span></div>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire06">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg7.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Picturesque Reprieves</span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, 201310</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire07">See details</a >                       
                      </div>
                    </div>
                    <div class="col-md-3">
                      <a href="properties.html" class="img">
                        <img src="{{ asset('scss/images/atsimg8.jpg') }}" alt="Image" class="img-fluid" />
                      </a>
                      <div class="property-content">
                        <div class="price mb-2"><span class="d-block">ATS Pious Hideaways<br/><br/></span></div>
                        <span class="d-block mb-2 text-black-50">Residential</span>
                          <span class="d-block mb-2 text-black-50"
                            >Noida, Uttar Pradesh, Received</span>
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
                          <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#aTSDestinaire08">See details</a >                       
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection