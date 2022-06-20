@extends('backend.layouts.partials.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('seller.dashboard') }}" data-toggle="ajax">Home</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $title }}
        </li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                {{-- @can('create-products')
                    <div class="col-12 text-right mb-2">
                        <a href="{{ route('seller.products.create') }}" class="btn btn-primary waves-effect waves-light"><i class="feather icon-plus"></i> Tambah
                            Data</a>
                    </div>
                @endcan --}}
                <table class="table zero-configuration" id="dataTable" data-url="{{ route('seller.orders.getData') }}"
                    width="100%">
                    <thead>
                        <th>No.</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Payment Method</th>
                        <th>Delivery Method</th>
                        <th>Order Date</th>
                        <th>Pay</th>
                        <th></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
