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
                            <h2 class="content-header-title float-left mb-0">BRAND</h2>
                            <div class="breadcrumb-wrapper col-10">
                                <ol class="breadcrumb">
                                    <h2 class="content-header-title float-left mb-0">Adidas Officials</h2>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="ecommerce-searchbar">
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <fieldset class="form-group position-relative">
                            <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Cari di toko ini">
                            <div class="form-control-position">
                                <i class="feather icon-search"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </section>

            <section class="app-ecommerce-details">
                <div class="card">
                    <div class="card-body">
                        <div class="item-img text-center">
                            <img src="https://i.ibb.co/Hd9LM6J/2.jpg" class="rounded-circle" alt="product image" width="170" height="170">
                            <h5><b>ADIDAS_STORE</b></h5>
                            <p class="text-muted">3 hours ago</p>
                                <button class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i>CHAT</button>
                                <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i>FOLLOW</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="app-ecommerce-details">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center">
                                    <ul class="pagination justify-content-center">
                                    <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                    <img src="https://i.ibb.co/Hd9LM6J/2.jpg" class="img-fluid" alt="product image" width="170" height="170">
                                    <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-justify">
                                <p>~ PUSAT GROSIR DAN ECERAN SEPATU TANGERANG </p>
                                <p> # MENJUAL BERBAGI MACAM MODEL SEPATU DENGAN KUALITAS ORIGINAL INDONESIA - IMPORT DAN LOKAL </p>
                                <p> # ORIGINAL condition : Brand New With Box / BNWB ( REPLACED BOX & TAG ) </p>
                                <p> # Ori akan kami bilang ori dan import/lokal akan kami import </p>
                                <p> # tidak guna berbohong hanya demi keuntungan 25-50rb ..berat didosanya </p>
                                <p> # Mohon Cantumkan ukuran/no/warna di keterangan saat anda order atau akan kami kirim random. Membeli = Setuju</p>
                            </div>
                        </div>
                    </div>
            </section>

            <div class="container mb-2">
                <h4 class="text-center"><b>NEW ARRIVALS</b></h4>
            </div>

            <!-- Ecommerce Products Starts -->
            <section id="ecommerce-products" class="grid-view">
                <div class="card ecommerce-card">
                    <div class="card-content">
                        <div class="item-img text-center">
                            <a href="app-ecommerce-details.html">
                                <img class="img-fluid" src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder"></a>
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
                                        $39.99
                                    </h6>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">Amazon - Fire TV Stick with Alexa Voice Remote - Black</a>
                                <p class="item-company">By <span class="company-name">Google</span></p>
                            </div>
                            <div>
                                <p class="item-description">
                                    Enjoy smart access to videos, games and apps with this Amazon Fire TV stick. Its Alexa voice remote lets you
                                    deliver hands-free commands when you want to watch television or engage with other applications. With a
                                    quad-core processor, 1GB internal memory and 8GB of storage, this portable Amazon Fire TV stick works fast
                                    for buffer-free streaming.
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
                                        $39.99
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ecommerce-card">
                    <div class="card-content">
                        <div class="item-img text-center">
                            <a href="app-ecommerce-details.html">
                                <img class="img-fluid" src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder">
                            </a>
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
                                        $35.00
                                    </h6>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">Google - Chromecast - Black</a>
                                <p class="item-company">By <span class="company-name">Amazon</span></p>
                            </div>
                            <div>
                                <p class="item-description">
                                    Google Chromecast: Enjoy a world of entertainment with Google Chromecast. Just connect to your HDTV's HDMI
                                    interface and your home Wi-Fi network to get started. You can stream your favorite apps from your compatible
                                    phone, tablet or laptop, plus use your phone as a remote to search, play and pause content.
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
                                        $35.00
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ecommerce-card">
                    <div class="card-content">
                        <div class="item-img text-center">
                            <a href="app-ecommerce-details.html"><img class="img-fluid" src="https://i.ibb.co/Hd9LM6J/2.jpg" alt="img-placeholder"></a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <div class="badge badge-primary badge-md">
                                        <span>4</span> <i class="feather icon-star"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="item-cost">
                                        <h6 class="item-price">
                                            $499.99
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">Dell - Inspiron 15.6" Touch-Screen Laptop - Black</a>
                                <p class="item-company">By <span class="company-name">Dell</span></p>
                            </div>
                            <div>
                                <p class="item-description">
                                    Dell Inspiron Laptop: Get speed and performance from this 15.6-inch Dell Inspiron laptop. Supported by an
                                    Intel Core i5-5200U processor and 6GB of DDR3L RAM, this slim touch screen laptop lets you run multiple
                                    applications without lag. The 1TB hard drive in this Dell Inspiron laptop lets you store multiple music,
                                    video and document files.
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
                                        $499.99
                                    </h6>
                                    <p class="shipping">
                                        <i class="feather icon-shopping-cart"></i> Free Shipping
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>
    <!-- END: Content-->
@endsection