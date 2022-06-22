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
                    </div>
                    <div class="view-options">
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
                <form action="{{ route('home') }}" method="get">
                    <fieldset class="form-group position-relative">
                        <input type="text" class="form-control search-product" name="search" id="iconLeft5" placeholder="Search here">
                        <div class="form-control-position">
                            <button type="submit"><i class="feather icon-search"></i></button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- Ecommerce Search Bar Ends -->

    <!-- Ecommerce Products Starts -->
    <section id="ecommerce-products" class="grid-view">
        @forelse ($products as $item)
        <div class="card ecommerce-card h-100">
            <div class="card-content">
                <div class="item-img text-center">
                    <a href="{{ route('detail') }}">
                        <img class="card-img-top" src="{{ asset('assets/images/products/' . $item->image) }}" alt="img-placeholder"></a>
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>{{ $item->stock - $item->orderDetail->pluck('quantity')->count() }}</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="item-price">
                                Rp. {{ number_format($item->price) }}
                            </h6>
                        </div>
                    </div>
                    <div class="item-name">
                        <a href="{{ route('detail') }}">{{ $item->name }}</a>
                        <p class="item-company">By <span class="company-name">{{ $item->brand->name }}</span></p>
                    </div>
                    <div>
                        <p class="item-description">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>{{ $item->stock - $item->orderDetail->pluck('quantity')->count() }}</span>
                            </div>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">
                                Rp. {{ number_format($item->price) }}
                            </h6>
                        </div>
                    </div>
                    <div class="wishlist">
                        <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                    </div>
                    <div class="cart">
                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart" data-toggle="add-to-cart" data-id="{{ $item->id }}">Add to cart</span> <a href="{{ route('carts') }}" class="view-in-cart d-none">View In Cart</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h1 class="mt-2 mb-2 text-center">Product Not Found</h1>
        @endforelse
        {{-- @foreach ($products as $item)
       
            
        @endforeach --}}
    </section>
    <!-- Ecommerce Products Ends -->

    <!-- Ecommerce Pagination Starts -->
    <section id="ecommerce-pagination">
        <div class="row">
            <div class="col-sm-12">
                {{-- <nav aria-label=""> --}}
                    <ul class="pagination justify-content-center mt-2 mb-3">
                        {{-- <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item next-item"><a class="page-link" href="#"></a></li> --}}
                        {{ $products->links() }}
                        {{-- <li class="page-item"></li> --}}
                    </ul>
                {{-- </nav> --}}
            </div>
        </div>
    </section>
    <!-- Ecommerce Pagination Ends -->
@endsection