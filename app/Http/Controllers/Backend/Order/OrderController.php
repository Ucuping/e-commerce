<?php

namespace App\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Order',
            'mods' => 'order',

        ];

        return view('backend.order.index', $data);
    }

    public function getData()
    {
        $brand = Brand::whereSellerId(auth()->user()->seller_id)->first();
        // $orderDetail = OrderDetail::with(['order', 'product', 'order.customer', 'product.brand'])->whereHas('product', function ($q) use ($brand) {
        //     $q->where('brand_id', $brand->id);
        // })->get();
        // return dd($orderDetail[0]->product->brand);
        return DataTables::of(OrderDetail::with(['order', 'product', 'order.customer', 'product.brand'])->whereHas('product', function ($q) use ($brand) {
            $q->where('brand_id', $brand->id);
        }))
            ->addColumn('customer', function ($data) {
                return $data->order->customer->name;
            })
            ->addColumn('product', function ($data) {
                return $data->product->name;
            })
            ->addColumn('payment_method', function ($data) {
                return ucfirst($data->order->payment_method);
            })
            ->addColumn('delivery_method', function ($data) {
                return ucfirst($data->order->delivery_method);
            })
            ->addColumn('order_date', function ($data) {
                return date('d-m-Y', strtotime($data->order->order_date));
            })
            ->addColumn('pay', function ($data) {
                return number_format($data->order->pay);
            })
            ->addColumn('order_id', function ($data) {
                return $data->order->id;
            })
            ->make(true);
    }

    public function detail(OrderDetail $orderDetail)
    {
        // return dd($orderDetail->order);
        $data = [
            'title' => 'Detail Order',
            'detailOrder' => $orderDetail
        ];

        return view('backend.order.detail', $data);
    }
}
