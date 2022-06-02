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
                            <h4 class="card-title">DELIVERY METHOD</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body actions">
                                <p class="mb-0">9447 Glen Eagles Drive</p>
                                <p>Lewis Center, OH 43035</p>
                                <p>UTC-5: Eastern Standard Time (EST) </p>
                                <p>202-555-0140</p>
                                <hr>
                                <div class="btn btn-primary btn-block delivery-address">UBAH</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- app ecommerce details start -->
                <section id="place-order" class="list-view product-checkout">
                    <div class="checkout-items">
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="{{ route('brands') }}">ADIDAS STAN SMITH WHITE GREEN ORIGINAL INDONESIA 100% BNWB</a>
                                        <span></span>
                                        <p class="item-company">By <span class="company-name">Adidas Official</span></p>
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
                </section>

                <div class="customer-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">PAYMENT METHOD</h4>
                            <div class="card-body actions">
                                <p class="mb-0 text-right">COD(Bayar di Tempat)</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body actions">
                                <div class="text-right">
                                    <p >Subtotal untuk Produk</p>
                                    <p>Total Ongkos Kirim:</p>
                                    <p>Biaya Penanganan</p>
                                    <p>Total Pembayaran:</p>
                                    <hr>
                                <div class="btn btn-primary delivery-address">ORDER</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection