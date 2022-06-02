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
                <!-- app ecommerce details start -->
                <section id="place-order" class="list-view product-checkout">
                    <div class="checkout-items">
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/9.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Amazon - Fire TV Stick with Alexa Voice Remote - Black</a>
                                        <span></span>
                                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 25</p>
                                    <p class="offers">17% off 4 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/2.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">Adidas Hoops 2.0 High White Black Original BNWB, Sneakers Pria</a>
                                        <p class="item-company">By <span class="company-name">Adidas</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 24</p>
                                    <p class="offers">7% off 1 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                RP900.000
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/3.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            <span>Google - Chromecast - Black</span>
                                        </a>
                                        <p class="item-company">By <span class="company-name">Google</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 27</p>
                                    <p class="offers">3% off 1 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $35
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/4.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            <span>Sharp - 50" Class (49.5" Diag.) - LED - 1080p - Black</span>
                                        </a>
                                        <p class="item-company">By <span class="company-name">Sharp</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 29</p>
                                    <p class="offers">5% off 2 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $429.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/10.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            <span>Dell - Inspiron 15.6" Touch-Screen Laptop - Black</span>
                                        </a>
                                        <p class="item-company">By <span class="company-name">Dell</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 30</p>
                                    <p class="offers">3% off 1 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $499.99
                                            </h6>
                                            <p class="shipping">
                                                <i class="feather icon-shopping-cart"></i> Free Shipping
                                            </p>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="app-ecommerce-details.html">
                                        <img src="../../../app-assets/images/pages/eCommerce/6.png" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-name">
                                        <a href="app-ecommerce-details.html">
                                            <span>Amazon - Echo Dot</span>
                                        </a>
                                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                                        <p class="stock-status-in">In Stock</p>
                                    </div>
                                    <div class="item-quantity">
                                        <p class="quantity-title">Quantity</p>
                                        <div class="input-group quantity-counter-wrapper">
                                            <input type="text" class="quantity-counter" value="1">
                                        </div>
                                    </div>
                                    <p class="delivery-date">Delivery by, Wed Apr 30</p>
                                    <p class="offers">6% off 3 offers Available</p>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                4 <i class="feather icon-star ml-25"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $49.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist remove-wishlist">
                                        <i class="feather icon-x align-middle"></i> Remove
                                    </div>
                                    <div class="cart remove-wishlist">
                                        <i class="fa fa-heart-o mr-25"></i> Wishlist
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-options">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="options-title">Options</p>
                                    <div class="coupons">
                                        <div class="coupons-title">
                                            <p>Coupons</p>
                                        </div>
                                        <div class="apply-coupon">
                                            <p>Apply</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="price-details">
                                        <p>Price Details</p>
                                    </div>
                                    <div class="detail">
                                        <div class="detail-title">
                                            Total MRP
                                        </div>
                                        <div class="detail-amt">
                                            $598
                                        </div>
                                    </div>
                                    <div class="detail">
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
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <div class="detail-title detail-total">Total</div>
                                        <div class="detail-amt total-amt">$574</div>
                                    </div>
                                    
                                    <div class="btn btn-primary btn-block place-order">
                                        <a href="{{ route('checkout') }}" class="view-in-cart d-none">CHECK OUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection