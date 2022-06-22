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
                                    <li class="breadcrumb-item"><a href="{{ route('carts') }}">Carts</a>
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
                <div class="customer-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">SHIPPING ADDRESS</h4>
                            <div class="card-body mb-0 actions">
                                <p>{{ getInfoLogin()->customer->name }} {{ getInfoLogin()->customer->phone }}</p>
                                <p>{{ getInfoLogin()->customer->address }}</p>
                                <a href="#">UBAH</a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $qtyTotal = 0;
                    $payTotal = 0;
                @endphp
                <!-- app ecommerce checkout start -->
                <section id="place-order" class="list-view product-checkout">
                    <div class="d-flex container mr-5">
                        <div class="checkout-items">
                            @foreach ($data as $item)
                                <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="item-img text-center">
                                            <a href="{{ route('detail') }}">
                                                <img class="img-fluid" src="{{ asset('assets/images/products/' . $item->product->image) }}" alt="img-placeholder">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-name">
                                                <a href="{{ route('brands') }}">{{ $item->product->name }}</a>
                                                <span></span>
                                                <p class="item-company">By <span class="company-name">{{ $item->product->brand->name }}</span>
                                                </p>
                                                <p class="stock-status-{{ $item->product->stock > 0 ? 'in' : 'out' }}">{{ $item->product->stock > 0 ? 'In Stock' : 'Sold Out' }}</p>
                                            </div>
                                            <div class="item-quantity">
                                                <p class="quantity-title">Quantity</p>
                                                <div class="input-group quantity-counter-wrapper">
                                                    <p class="quantity-counter">{{ $item->quantity }}</p>
                                                    @php
                                                        $qtyTotal += $item->quantity;
                                                        $payTotal += $item->product->price * $item->quantity;
                                                    @endphp
                                                </div>
                                            </div>
                                            <input type="hidden" name="customer_id" value="{{ $item->customer_id }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- app ecommerce checkout end -->

                    <!-- app ecommerce payment method start -->
                    <div class="checkout-options col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Price Details</h4>
                                {{-- <div class="card-body actions">
                                    <p class="mb-0 text-right">COD(Bayar di Tempat)</p>
                                </div> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body actions">
                                    <div class="price">
                                        <div class="price-title"><p>Price of {{ $qtyTotal }} items</p></div>
                                        <div class="apply-price mb-0 text-right"><p>Rp. {{ number_format($payTotal) }}</p></div>
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
                                        <div class="detail-amt total-amt">Rp. {{ number_format($payTotal) }}</div>
                                        <input type="hidden" name="pay_total" value="{{ $payTotal }}">
                                    </div>
                                    <div class="btn btn-primary btn-block place-order" data-toggle="payment-modal">PAYMENT</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- app ecommerce payment method end -->
                </section>
            </div>
        </div>
    {{-- </div> --}}
    <!-- END: Content-->
    @include('frontend.Checkout.form')
@endsection
