@extends('frontend.layouts.partials.ajax')

@section('content')
    @include('frontend.layouts.partials.navbar')
    <!-- Ecommerce Content Section Starts -->
    <section id="ecommerce-header">
        <div class="row">
            <div class="col-sm-12">
                <div class="ecommerce-header-items">
                    <div class="result-toggler">
                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                            <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                        </button>
                        <div class="search-results">
                            16285 results found
                        </div>
                    </div>
                    <div class="view-options">
                        <select class="price-options form-control" id="ecommerce-price-options">
                            <option selected>Featured</option>
                            <option value="1">Lowest</option>
                            <option value="2">Highest</option>
                        </select>
                        <div class="view-btn-option">
                            <button class="btn btn-white view-btn grid-view-btn active">
                                <i class="feather icon-grid"></i>
                            </button>
                            <button class="btn btn-white list-view-btn view-btn">
                                <i class="feather icon-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ecommerce Content Section Starts -->
    <!-- background Overlay when sidebar is shown  starts-->
    <div class="shop-content-overlay"></div>
    <!-- background Overlay when sidebar is shown  ends-->

    <!-- Ecommerce Search Bar Starts -->
    <section id="ecommerce-searchbar">
        <div class="row mt-1">
            <div class="col-sm-12">
                <fieldset class="form-group position-relative">
                    <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                    <div class="form-control-position">
                        <i class="feather icon-search"></i>
                    </div>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- Ecommerce Search Bar Ends -->

    <!-- Ecommerce Products Starts -->
    <section id="ecommerce-products" class="grid-view">
        @foreach ($products as $item)
        {{-- @php
            dd($item['image']);
        @endphp --}}
            
            <div class="card ecommerce-card">
                <div class="card-content">
                    <div class="item-img text-center">
                        <a href="{{ route('detail') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/products/' . $item['image']) }}" alt="img-placeholder"></a>
                    </div>
                    <div class="card-body">
                        <div class="item-wrapper">
                            <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    <span>4</span> <i class="feather icon-star"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="item-price">
                                    {{ $item['price'] }}
                                </h6>
                            </div>
                        </div>
                        <div class="item-name">
                            <a href="{{ route('detail') }}">{{ $item['product_name'] }}</a>
                            <p class="item-company">By <span class="company-name">Nike</span></p>
                        </div>
                        <div>
                            <p class="item-description">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                    <div class="item-options text-center">
                        <div class="item-wrapper">
                            <div class="item-rating">
                                <div class="badge badge-primary badge-md">
                                    <span>4</span> <i class="feather icon-star"></i>
                                </div>
                            </div>
                            <div class="item-cost">
                                <h6 class="item-price">
                                    {{ $item['price'] }}
                                </h6>
                            </div>
                        </div>
                        <div class="wishlist">
                            <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                        </div>
                        <div class="cart">
                            <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to cart</span> <a href="{{ route('cart') }}" class="view-in-cart d-none">View In Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <!-- Ecommerce Products Ends -->

    <!-- Ecommerce Pagination Starts -->
    <section id="ecommerce-pagination">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-2">
                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Ecommerce Pagination Ends -->
@endsection