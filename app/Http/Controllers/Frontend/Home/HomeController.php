<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = null;
        if (isset($request->search) and $request->search != '') {
            $query = Product::where('name', 'LIKE', '%' . $request->search . '%')->with('productCategory')->paginate(10);
        } elseif (isset($request->category) and $request->category != '') {
            $query = Product::whereHas('productCategory', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->category . '%');
            })->with('productCategory')->paginate(10);
        } else if (isset($request->brand) and $request->brand != '') {
            $query = Product::whereHas('brand', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->brand . '%');
            })->with('productCategory')->paginate(10);
        } else {
            $query = Product::with('productCategory')->paginate(10);
        }
        $data = [
            'title' => 'Main',
            'mods' => '',
            'products' => $query
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

    // public function keranjang()
    // {
    //     $data = [
    //         'title' => 'Keranjang Produk'
    //     ];

    //     return view('frontend.cart.index', $data);
    // }

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
