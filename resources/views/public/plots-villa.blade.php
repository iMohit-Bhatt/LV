@extends('public.layouts.master')

@section('content')
    <div class="hero inner-page" style="background-image: url('{{ asset('scss/images/hero_bg_1.jpg') }}');">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="intro">
                        <h1><strong>Plots & Villa</strong></h1>
                        <div class="intro-bullets">
                            <span class="d-block">Find your perfect plot or villa for investment.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                @forelse($properties as $property)
                <div class="col-md-6 col-lg-4 mb-4">
                            <div class="property-item">
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
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No plots or villa properties available at the moment.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Include Property Modals -->
    @include('public.property-modals')
@endsection
