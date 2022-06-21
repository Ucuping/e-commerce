@extends('backend.layouts.partials.ajax')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('seller.dashboard') }}">Home</a>
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
                            action="{{ route('seller.brands.update', ['brand' => $brand->id]) }}"
                            data-request="ajax" method="POST" data-success-callback="{{ route('seller.brands') }}"
                            enctype="multipart/form-data" data-redirect="true">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ $brand->name }}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ $brand->description }}</textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
