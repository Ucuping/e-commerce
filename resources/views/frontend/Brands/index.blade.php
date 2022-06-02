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
                            <h2 class="content-header-title float-left mb-0">About Brands</h2>
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
                        <div class="row mb-5 mt-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="https://i.ibb.co/Hd9LM6J/2.jpg" 
                                    class="img-fluid" alt="product image">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <h5>ADIDAS  OFFICIAL</h5>
                                <p class="text-muted">Aktif 1 jam yang lalu</p>
                                <hr>
                                <p>👉PRODUK ORIGINAL yang kami jual ini adalah BNWB (Brand New With Box) : merupakan barang bocoran pabrik.
                                    Jadi sepatu keluar dari pabrik tanpa box dan sebagian tanpa tag label size resmi, lalu diganti dengan box dan tag lain dengan brand yang sama.
                                    Jadi barang original yang kami jual ssb : box replaced dan Sebagian banyak tidak memiliki kode artikel Remi / sesuai dengan sepatu jika di cek art di google.
                                    Original BNWB hanya beberapa sepatu tidak terlihat rapih dibagian sisi sepatu dan itu hanya di bagian tertentu. 
                                    seperti overlem ( lem terlihat ) namun tidak terlihat secara visual waktu digunakan dari jarak sudut pandang orang lain dengan posisi sama" berdiri. 
                                    Kami sudah pasti melakukan Finishing Sebelum Di kirim. Dengan Menghilangkan sebagian lem yang terlihat di sisi sepatu dengan cairan khusus dari pabrik. 
                                    Sehingga menyebabkan bau seperti lem, padahal itu cairan untuk membersikan lem di bagian sisi sepatu.
                                    Untuk materialnya (upper & outsole) Saya Menjamin Original Indonesia Sama Seperti Di Store Remi.</p>
                                </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <!-- END: Content-->
@endsection