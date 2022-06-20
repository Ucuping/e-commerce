@extends('backend.layouts.partials.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('seller.orders') }}">Order</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
@endsection

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">

    <!-- page users view start -->
    <section class="page-users-view">
        <div class="row">
            <!-- account start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Detail Order</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="users-view-image d-flex align-items-center">
                                <img src="{{ $detailOrder->product->image == null ? 'https://ui-avatars.com/api/?name=' . $detailOrder->product->name . '&&background=random' : asset('assets/images/products/' . $detailOrder->product->image) }}"
                                    class="users-avatar-shadow w-100 rounded mb-2 pr-3 ml-1" alt="avatar" style="max-width: 200px;">
                            </div>
                            <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold pr-3">Product Category</td>
                                        <td>{{ $detailOrder->product->productCategory->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Name</td>
                                        <td>{{ $detailOrder->product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Price</td>
                                        <td>{{ $detailOrder->product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pr-3">Customer</td>
                                        <td>{{ $detailOrder->order->customer->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Order Name</td>
                                        <td>{{ $detailOrder->order->name }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-12 col-lg-5">
                                <table class="ml-0 ml-sm-0 ml-lg-0">
                                    <tr>
                                        <td class="font-weight-bold pr-3">No. Telp/Hp</td>
                                        <td>{{ ucfirst($detailOrder->order->payment_method) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pr-3">Delivery Method</td>
                                        <td>{{ ucfirst($detailOrder->order->delivery_method) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold pr-3">Pay</td>
                                        <td>{{ number_format($detailOrder->order->pay) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Amount</td>
                                        <td>{{ number_format($detailOrder->amount) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Quantity</td>
                                        <td>{{ $detailOrder->quantity }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Subtotal</td>
                                        <td>{{ number_format($detailOrder->subtotal) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page users view end -->
@endsection
