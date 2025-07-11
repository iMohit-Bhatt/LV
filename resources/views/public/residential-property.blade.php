@extends('public.layouts.master')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('{{ asset('scss/images/hero_bg_3.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Residential Properties</h1>
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
                    <p>No residential properties available at the moment.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
