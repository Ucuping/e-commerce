<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Main',
            'mods' => '',
            'products' => Product::all()
        ];

        return view('frontend.home.index', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail Produk'
        ];

        return view('frontend.product-detail.index', $data);
    }

    public function keranjang()
    {
        $data = [
            'title' => 'Keranjang Produk'
        ];

        return view('frontend.cart.index', $data);
    }

    public function co()
    {
        $data = [
            'title' => 'Check Out'
        ];

        return view('frontend.checkout.index', $data);
    }

    public function brand()
    {
        $data = [
            'title' => 'Brand Shoes'
        ];

        return view('frontend.brands.index', $data);
    }
}
