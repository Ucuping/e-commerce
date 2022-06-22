@extends('frontend.layouts.partials.ajax')

@section('content')
    @include('frontend.layouts.partials.navbar')
    <!-- BEGIN: Content-->
    {{-- <div class="app-content content"> --}}
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ $title }}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ $title }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/products/' . $product->image) }}" 
                                        class="img-fluid" alt="product image" width="350" height="350">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>{{ $product->name }}</h5>
                                    <p class="text-muted">by {{ $product->brand->name }}</p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">
                                        <p class="text-primary font-medium-3 mr-1 mb-0">Rp. {{ number_format($product->price) }}</p>
                                    </div>
                                    <hr>
                                    <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free Shipping
                                    </p>
                                    <hr>
                                    <hr>
                                    <p>{!! $product->stock - $product->orderDetail->pluck('quantity')->count() > 0 ? 'Available - <span class="text-success">In stock</span>' : 'Not Available - <span class="text-danger">Sold Out</span>' !!}</p>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <span class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0" data-toggle="add-to-cart" data-id="{{ $product->id }}"><i class="feather icon-shopping-cart mr-25"></i>ADD TO CART</span>
                                        {{-- <button class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i><a href="{{ route('checkouts') }}">BUY NOW</a></button> --}}
                                    </div>
                                    <hr>
                                    {{-- <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- app ecommerce details end -->

                <!-- app ecommerce brand start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-3 d-flex align-items-center mb-2 mb-md-0 px-5">
                                    <div class="d-flex align-items-center md-2 ">
                                        <img src="{{ asset('assets/images/products/' . $product->image) }}" class="rounded-circle" alt="product image" width="170" height="170">
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 mt-2">
                                    <h5><b>{{ $product->brand->name }}</b></h5>
                                    <p class="text-muted">3 hours ago</p>
                                        <button class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i> <a href="{{ route('brands') }}"">VISIT BRAND</a></button>
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i>FOLLOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="card-body col-sm-12">
                                    <div class="text-center">
                                        <h2>SPESIFICATION PRODUCT</h2>
                                        <p>People also search for this items</p>
                                    </div>
                                    <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <p>Merk - <span class="text-primary">by {{ $product->brand->name }}</span></p>
                                                {{-- <p>height shoes - <span>Rendah</span></p> --}}
                                                <p>Stock - <span class="text-primary">{{ $product->stock - $product->orderDetail->pluck('quantity')->count() }}</span></p>
                                                {{-- <p>Send from - <span>TANGERANG</span></p> --}}
                                                <hr>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <div class="text-center">
                                                    <h2>DESCRIPTIONS PRODUCT</h2>
                                                </div>
                                                <div class="swiper-responsive-breakpoints swiper-container py-2">
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                

            </div>
        </div>
    {{-- </div> --}}
    <!-- END: Content-->
@endsection