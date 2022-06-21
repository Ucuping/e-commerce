<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cart',
            'carts' => getInfoLogin() != null ? Cart::where('customer_id', getInfoLogin()->customer_id)->get() : []
        ];

        return view('frontend.cart.index', $data);
    }
}
