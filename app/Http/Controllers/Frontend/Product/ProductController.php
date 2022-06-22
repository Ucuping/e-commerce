<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $data = [
            'title' => 'Product Detail',
            'product' => $product
        ];

        return view('frontend.product-detail.index', $data);
    }
}
