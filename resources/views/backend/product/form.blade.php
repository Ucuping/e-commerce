@extends('backend.layouts.partials.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('sellers.dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('sellers.products') }}">Siswa</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $title }}
        </li>
        </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-xl-6">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form
                            action="{{ isset($product) ? route('sellers.products.update', ['product' => $product->id]) : route('sellers.products.store') }}"
                            data-request="ajax" method="POST" data-success-callback="{{ route('sellers.products') }}"
                            enctype="multipart/form-data" data-redirect>
                            <div class="form-group">
                                <label for="product_category">Product Category <span class="text-danger">*</span></label>
                                <select name="product_category_id" class="form-control" id="product_category">
                                    @foreach ($productCategories as $productCategory)
                                        <option value="{{ $productCategory->id }}"
                                            {{ isset($product) && $productCategory->id == $product->product_category_id ? 'selected' : '' }}>
                                            {{ $productCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ isset($product) ? $product->name : '' }}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="price">Price <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" id="price" name="price"
                                    value="{{ isset($product) ? $product->price : '' }}"
                                    placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" id="stock" name="stock"
                                    value="{{ isset($product) ? $product->stock : '' }}"
                                    placeholder="Stock">
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image <span class="text-danger">*</span></label>
                                <input class="d-block dropify form-control" type="file" id="image" name="image">
                                <span class="d-block">* jpeg, jpg, png, bmp max 2 MB</span>
                                @if (isset($product))
                                    <span class="d-block">* kosongkan form jika tidak ingin mengupdate foto
                                        profil</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Description" class="form-control" id="description" cols="30" rows="10">{{ isset($product) ? $product->description : '' }}</textarea>
                            </div>
                            <div class="text-right">
                                <a href="{{ route('sellers.products') }}"
                                    class="btn btn-outline-primary waves-effect waves-light">Back</a>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
