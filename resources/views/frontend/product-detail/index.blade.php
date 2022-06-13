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
                            <h2 class="content-header-title float-left mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
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
                                        <img src="https://i.ibb.co/Hd9LM6J/2.jpg" 
                                        class="img-fluid" alt="product image" width="350" height="350">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>ADIDAS STAN SMITH WHITE GREEN ORIGINAL INDONESIA 100% BNWB</h5>
                                    <p class="text-muted">by Adidas Official</p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">
                                        <p class="text-primary font-medium-3 mr-1 mb-0">RP500.000</p>
                                        <span class="pl-1 font-medium-3 border-left">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </span>
                                        <span class="ml-50 text-dark font-medium-3">424 ratings</span>
                                    </div>
                                    <hr>
                                    <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free Shipping
                                    </p>
                                    <p class="font-weight-bold"> <i class="feather icon-dollar-sign mr-50 font-medium-2"></i>EMI options available
                                    </p>
                                    <hr>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Color</label>
                                        <ul class="list-unstyled mb-0 product-color-options">
                                            <li class="d-inline-block selected">
                                                <div class="color-option b-primary">
                                                    <div class="filloption bg-primary"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-success">
                                                    <div class="filloption bg-success"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-danger">
                                                    <div class="filloption bg-danger"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-warning">
                                                    <div class="filloption bg-warning"></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-black">
                                                    <div class="filloption bg-black"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <p>Available - <span class="text-success">In stock</span></p>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <button class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i><a href="{{ route('cart') }}">ADD TO CART</a></button>
                                        <button class="btn btn-outline-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i></i><a href="{{ route('checkout') }}">BUY NOW</a></button>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button>
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
                                        <img src="https://i.ibb.co/Hd9LM6J/2.jpg" class="rounded-circle" alt="product image" width="170" height="170">
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 mt-2">
                                    <h5><b>ADIDAS_STORE</b></h5>
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
                                                <p>Merk - <span class="text-primary">by Adidas</span></p>
                                                <p>height shoes - <span>Rendah</span></p>
                                                <p>Stock - <span class="text-primary">100</span></p>
                                                <p>Send from - <span>TANGERANG</span></p>
                                                <hr>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <div class="text-center">
                                                    <h2>DESCRIPTIONS PRODUCT</h2>
                                                </div>
                                                <div class="swiper-responsive-breakpoints swiper-container py-2">
                                                    <p>=>> BELI SEKARANG SEBELUM STOK HABIS DAN HARGA NAIK.!</p>
                                                    <p>=>> DIHARAPKAN MEMBACA CATATAN ATAU DESKRIPSI TOKO SEBELUM ORDER..</p>
                                                    <p>=>> TULISKAN VARIAN WARNA DI KOLOM CATATAN BESERTA UKURAN YG DIINGINKAN.</p>
                                                    <p>➡MENGENAI PRODUK KAMI.</p>
                                                    <p class="text-justify">👉PRODUK ORIGINAL yang kami jual ini adalah BNWB (Brand New With Box) : merupakan barang bocoran pabrik.
                                                        Jadi sepatu keluar dari pabrik tanpa box dan sebagian tanpa tag label size resmi, lalu diganti dengan box dan tag lain dengan brand yang sama.
                                                        Jadi barang original yang kami jual ssb : box replaced dan Sebagian banyak tidak memiliki kode artikel Remi / sesuai dengan sepatu jika di cek art di google.
                                                        Original BNWB hanya beberapa sepatu tidak terlihat rapih dibagian sisi sepatu dan itu hanya di bagian tertentu. 
                                                        seperti overlem ( lem terlihat ) namun tidak terlihat secara visual waktu digunakan dari jarak sudut pandang orang lain dengan posisi sama" berdiri. 
                                                        Kami sudah pasti melakukan Finishing Sebelum Di kirim. Dengan Menghilangkan sebagian lem yang terlihat di sisi sepatu dengan cairan khusus dari pabrik. 
                                                        Sehingga menyebabkan bau seperti lem, padahal itu cairan untuk membersikan lem di bagian sisi sepatu.
                                                        Untuk materialnya (upper & outsole) Saya Menjamin Original Indonesia Sama Seperti Di Store Remi.
                                                    </p>
                                                    <p>NOTE : </p>
                                                    <p>- Tidak bisa refund karena alasan salah pesan/berubah pikiran/kebesaran/kekecilan </p>
                                                    <p>- Tidak bisa mengganti alamat, mohon agar mencantumkan alamat dengan benar </p>
                                                    <p>- Menerima return hanya dengan produk yang sama dan permasalahan hanya jikalau pada ukuran atau
                                                        atas kesalahan kami</p>
                                                    <p>#sepatu #sepatuadidas #sepatuadidassuperstar #adidassuperstaroriginal #sneakersadidas #sneakerscasual #adidassuperstarog #adisassuperstarfoundation #adisasoriginal</p>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <div class="text-center">
                                                    <h2>RELATED PRODUCT</h2>
                                                </div>
                                            <div class="swiper-responsive-breakpoints swiper-container py-2">
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <div class="item-heading">
                                                    <p class="text-truncate mb-0">
                                                        ADIDAS COUNTRY WHITE GREEN SOL GUM ORIGINAL
                                                    </p>
                                                    <p>
                                                        <small>by</small>
                                                        <small>Adidas.id</small>
                                                    </p>
                                                </div>
                                                <div class="img-container w-50 mx-auto my-2 py-75">
                                                    <img src="https://i.ibb.co/Hd9LM6J/2.jpg"  class="img-fluid" alt="image">
                                                </div>
                                                <div class="item-meta">
                                                    <div class="product-rating">
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                    </div>
                                                    <p class="text-primary mb-0">RP690.000</p>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="swiper-slide rounded swiper-shadow">
                                                <div class="item-heading">
                                                    <p class="text-truncate mb-0">
                                                        ADIDAS BECKENBAUER LEATHER BLACK GUM ORIGINAL INDONESIA 100% BNWB, SNEAKERS PRIA ORIGINAL BIG SIZE
                                                    </p>
                                                    <p>
                                                        <small>by</small>
                                                        <small>Adidas Store</small>
                                                    </p>
                                                </div>
                                                <div class="img-container w-50 mx-auto my-2 py-75">
                                                    <img src="https://i.ibb.co/Hd9LM6J/2.jpg"  class="img-fluid" alt="image">
                                                </div>
                                                <div class="item-meta">
                                                    <div class="product-rating">
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-warning"></i>
                                                        <i class="feather icon-star text-secondary"></i>
                                                    </div>
                                                    <p class="text-primary mb-0">RP760.000</p>
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
    </div>
    <!-- END: Content-->
@endsection