@php
    $footer = \App\Models\Footer::active()->first();
@endphp

<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Contact</h3>
                    @if($footer && $footer->address)
                        <address><span class="icon-map-marker"></span> {{ $footer->address }}</address>
                    @endif
                    <ul class="list-unstyled links w-100">
                        @if($footer && $footer->phone)
                            <li class="d-block"><a href="tel:{{ $footer->phone }}"><span class="icon-mobile"></span> {{ $footer->phone }}</a></li>
                        @endif
                        @if($footer && $footer->email)
                            <li class="d-block">
                                <a href="mailto:{{ $footer->email }}"><span class="icon-envelope-o"></span> {{ $footer->email }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Sources</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="{{ url('/about') }}">About us</a></li>
                        <li><a href="{{ url('/about/our-team') }}">Our Team</a></li>
                        <li><a href="{{ url('/mission') }}">Vision</a></li>
                        <li><a href="{{ url('/mission') }}">Mission</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                        <li><a href="{{ url('/properties/residential-property') }}">Residential Property</a></li>
                        <li><a href="{{ url('/properties/commercial-property') }}">Commercial</a></li>
                        <li><a href="{{ url('/properties/plots-villa') }}">Plot & Villa</a></li>
                        <li><a href="{{ url('/services/advisory-investment') }}">Advisory Investment</a></li>
                        <li><a href="{{ url('/services/leasing-property') }}">Leasing Corporate</a></li>
                        <li><a href="{{ url('/services/assistance-loan') }}">Assistance Loan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Links</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{ url('/sitemap') }}">Site Map</a></li>
                        <li><a href="{{ url('/contact') }}">Contact us</a></li>
                        <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                    </ul>
                    @if($footer)
                        <ul class="list-unstyled social">
                            @if($footer->instagram_url)
                                <li>
                                    <a href="{{ $footer->instagram_url }}" target="_blank"><span class="icon-instagram"></span></a>
                                </li>
                            @endif
                            @if($footer->twitter_url)
                                <li>
                                    <a href="{{ $footer->twitter_url }}" target="_blank"><span class="icon-twitter"></span></a>
                                </li>
                            @endif
                            @if($footer->facebook_url)
                                <li>
                                    <a href="{{ $footer->facebook_url }}" target="_blank"><span class="icon-facebook"></span></a>
                                </li>
                            @endif
                            @if($footer->linkedin_url)
                                <li>
                                    <a href="{{ $footer->linkedin_url }}" target="_blank"><span class="icon-linkedin"></span></a>
                                </li>
                            @endif
                            @if($footer->pinterest_url)
                                <li>
                                    <a href="{{ $footer->pinterest_url }}" target="_blank"><span class="icon-pinterest"></span></a>
                                </li>
                            @endif
                            @if($footer->dribbble_url)
                                <li>
                                    <a href="{{ $footer->dribbble_url }}" target="_blank"><span class="icon-dribbble"></span></a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                @if($footer && $footer->copyright_text)
                    <p>{!! $footer->copyright_text !!}</p>
                @else
                    <p>Copyright &copy; {{ date('Y') }}. All Rights Reserved. &mdash; by ekanshrealty.com</p>
                @endif
            </div>
        </div>
    </div>
</div> 