<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use Exception;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Carts',
            'carts' => getInfoLogin() != null ? Cart::where(['customer_id' => getInfoLogin()->customer_id, 'is_checkout' => false])->get() : []
        ];

        return view('frontend.cart.index', $data);
    }

    public function store(Request $request)
    {
        try {
            cart::create([
                'customer_id' => getInfoLogin()->customer_id,
                'product_id' => $request->product_id,
                'quantity' => 1,
            ]);

            return response()->json([
                'message' => 'Success add to cart',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function destroy(Cart $cart)
    {
        try {
            $cart->delete();

            return response()->json([
                'message' => 'Success delete to cart',
                'redirect' => route('carts')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
