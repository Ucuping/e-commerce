@extends('frontend.layouts.partials.ajax')

@section('content')
    @include('frontend.layouts.partials.navbar')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">CHECK OUT</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('detail') }}">Details</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('cart') }}">Carts</a>
                                    </li>
                                    <li class="breadcrumb-item active">Checkout
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="customer-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">SHIPPING ADDRESS</h4>
                            <div class="card-body actions">
                                <p class="mb-0">Aida Andinar (+62)8385878049</p>
                            </div>
                            <div>
                                <p>Dusun: srono rt/rw: 03/08 desa: kebaman (Blumbangan) jalan sunan kalijaga,
                                    KAB. BANYUWANGI - SRONO, JAWA TIMUR, ID 68471</p>
                            </div>
                            <hr>
                            <a href="#">UBAH</a>
                        </div>
                    </div>
                </div>

                <!-- app ecommerce checkout start -->
                <section id="place-order" class="list-view product-checkout">
                    <div class="d-flex container mr-5">
                        <div class="checkout-items">
                            <div class="card ecommerce-card">
                                <div class="card-content">
                                    <div class="item-img text-center">
                                        <a href="{{ route('detail') }}">
                                            <img src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <h5>ADIDAS STAN SMITH WHITE GREEN ORIGINAL INDONESIA 100% BNWB</h5>
                                            <span></span>
                                            <p class="item-company">By <span class="company-name">Adidas Official</span>
                                            </p>
                                            <p class="stock-status-in">In Stock</p>
                                            <p>RP500.000</p>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                        <p class="delivery-date">Delivery by, Wed Apr 25</p>
                                        <p class="offers">17% off 4 offers Available</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ecommerce-card">
                                <div class="card-content">
                                    <div class="item-img text-center">
                                        <a href="{{ route('detail') }}">
                                            <img src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <h5>ADIDAS STAN SMITH WHITE GREEN ORIGINAL INDONESIA 100% BNWB</h5>
                                            <p class="item-company">By <span class="company-name">Adidas Official</span>
                                            </p>
                                            <p class="stock-status-in">In Stock</p>
                                            <p>RP500.000</p>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                        <p class="delivery-date">Delivery by, Wed Apr 25</p>
                                        <p class="offers">17% off 4 offers Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- app ecommerce checkout end -->

                    <!-- app ecommerce payment method start -->
                    <div class="checkout-options col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Price Details</h4>
                                <div class="card-body actions">
                                    <p class="mb-0 text-right">COD(Bayar di Tempat)</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body actions">
                                    <div class="price">
                                        <div class="price-title"><p>Price of 3 items</p></div>
                                        <div class="apply-price mb-0 text-right"><p>RP.500.000</p></div>
                                    </div>
                                    <div class="deliv">
                                        <div class="deliv-title">
                                            <p>Delivery Charges</p>
                                        </div>
                                        <div class="apply-deliv mb-0 text-right">
                                            <p>Free</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <div class="detail-title detail-total">Amount Payable</div>
                                        <div class="detail-amt total-amt">R500.000</div>
                                    </div>
                                    <div class="btn btn-primary btn-block place-order">PAYMENT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- app ecommerce payment method end -->
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
