<?php

namespace App\Http\Controllers\Frontend\Order;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // return dd($request->all());
        $data = [
            'title' => 'Checkouts',
            'data' => Cart::whereIn('customer_id', $request->customer_id)->where('is_checkout', false)->get()
        ];

        return view('frontend.Checkout.index', $data);
    }

    public function store(Request $request)
    {
        try {
            Cart::whereCustomerId($request->customer_id)->update(['is_checkout' => true]);
            $carts = Cart::whereCustomerId($request->customer_id)->get();
            foreach ($carts as $key => $value) {
                $order = Order::create([
                    'customer_id' => $request->customer_id,
                    'name' => $value->product->name . ' Order',
                    'payment_method' => $request->payment_method,
                    'delivery_method' => $request->delivery_method,
                    'order_date' => Carbon::now(),
                    'pay' => $request->pay
                ]);

                $orderDetail = OrderDetail::create([
                    'product_id' => $value->product_id,
                    'order_id' => $order->id,
                    'amount' => $value->product->price,
                    'quantity' => $value->quantity,
                    'subtotal' => $value->product->price * $value->quantity
                ]);
            }

            return response()->json([
                'message' => 'Success order',
                'redirect' => route('home')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
