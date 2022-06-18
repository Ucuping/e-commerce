@extends('backend.layouts.partials.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('sellers.dashboard') }}" data-toggle="ajax">Home</a>
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
                @can('create-products')
                    <div class="col-12 text-right mb-2">
                        <a href="{{ route('sellers.products.create') }}" class="btn btn-primary waves-effect waves-light" data-toggle="ajax"
                            data-target="{{ route('sellers.products.create') }}"><i class="feather icon-plus"></i> Tambah
                            Data</a>
                    </div>
                @endcan
                <table class="table zero-configuration" id="dataTable" data-url="{{ route('sellers.products.getData') }}"
                    width="100%">
                    <thead>
                        <th>No.</th>
                        <th>Product Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>description</th>
                        <th></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
