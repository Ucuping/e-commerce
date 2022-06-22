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

                <!-- app ecommerce cart start -->
                <section id="place-order" class="list-view product-checkout">
                    <div class="d-flex container mr-5">
                        <div class="checkout-items col-md-12">
                            @forelse ($carts as $cart)
                                <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="item-img text-center">
                                            <a href="{{ route('detail') }}">
                                                <img class="img-fluid" src="{{ asset('assets/images/products/' . $cart->product->image) }}" alt="img-placeholder">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-name">
                                                <a href="{{ route('brands') }}">{{ $cart->product->name }}</a>
                                                <span></span>
                                                <p class="item-company">By <span class="company-name">{{ $cart->product->brand->name }}</span>
                                                </p>
                                                <p class="stock-status-{{ $cart->product->stock > 0 ? 'in' : 'out' }}">{{ $cart->product->stock > 0 ? 'In Stock' : 'Sold Out' }}</p>
                                            </div>
                                            <div class="item-quantity">
                                                <p class="quantity-title">Quantity</p>
                                                <div class="input-group quantity-counter-wrapper">
                                                    <input type="text" class="quantity-counter" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                <div class="item-rating">
                                                    <div class="badge badge-primary badge-md">
                                                        {{ $cart->product->stock }}
                                                    </div>
                                                </div>
                                                <div class="item-cost">
                                                    <h6 class="item-price">
                                                        Rp. {{ number_format($cart->product->price, 0, ',', '.') }}
                                                    </h6>
                                                    {{-- <p class="shipping">
                                                        <i class="feather icon-shopping-cart"></i> Free Shipping
                                                    </p> --}}
                                                </div>
                                            </div>
                                            <div class="wishlist remove-wishlist remove-cart" data-toggle="delete" data-id="{{ $cart->id }}">
                                                <i class="feather icon-x align-middle"></i> Remove
                                            </div>
                                            <div class="cart remove-wishlist">
                                                <i class="fa fa-heart-o mr-25"></i> Wishlist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            @empty
                                {{-- <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h5>Carts Not Found</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="text-center mt-5 p-5">
                                    <h4>Carts Not Found</h4>
                                    @if (getInfoLogin() != null)
                                        <p><a href="{{ route('home') }}">Add product to cart</a></p>
                                    @else
                                        <p>You are not login, <a href="{{ route('auth.login') }}">login in here</a></p>
                                    @endif
                                </div>
                            @endforelse
                        </div>
                        <!-- app ecommerce options cart start -->
                        <div class="checkout-options col-md-6">
                            <form action="{{ route('checkouts') }}" method="post">
                                @csrf
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            @php
                                                $total = 0;
                                            @endphp
                                            <div class="price-details">
                                                <p>Price Details</p>
                                            </div>
                                            @foreach ($carts as $item)
                                                <div class="detail">
                                                    <div class="detail-title">
                                                        {{ $item->product->name }}
                                                    </div>
                                                    <div class="detail-amt">
                                                        Rp. {{ number_format($item->product->price, 0, ',', '.') }} x {{ $item->quantity }}
                                                    </div>
                                                </div>
                                                @php
                                                    $total += $item->product->price * $item->quantity;
                                                @endphp
                                                <div class="form-group">
                                                    <input type="hidden" name="customer_id[]" class="form-control" value="{{ $item->customer_id }}">
                                                </div>
                                            @endforeach
                                            {{-- <div class="detail">
                                                <div class="detail-title">
                                                    Bag Discount
                                                </div>
                                                <div class="detail-amt discount-amt">
                                                    -25$
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <div class="detail-title">
                                                    Estimated Tax
                                                </div>
                                                <div class="detail-amt">
                                                    $1.3
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <div class="detail-title">
                                                    EMI Eligibility
                                                </div>
                                                <div class="detail-amt emi-details">
                                                    Details
                                                </div>
                                            </div>
                                            <div class="detail">
                                                <div class="detail-title">
                                                    Delivery Charges
                                                </div>
                                                <div class="detail-amt discount-amt">
                                                    Free
                                                </div>
                                            </div> --}}
                                            <hr>
                                            <div class="detail">
                                                <div class="detail-title detail-total">Total</div>
                                                <div class="detail-amt total-amt">Rp. {{ number_format($total, 0, ',', '.') }}</div>
                                            </div>
                                            <button class="btn btn-primary btn-block place-order" type="submit" {{ getInfoLogin() == null ? 'disabled' : '' }}>CHECK OUT</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- app ecommerce options cart end -->
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    {{-- </div> --}}
    <!-- END: Content-->
@endsection
