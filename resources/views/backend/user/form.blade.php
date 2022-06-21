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
                            action="{{ route('seller.profiles.update', ['user' => $user->id]) }}"
                            data-request="ajax" method="POST" data-success-callback="{{ route('seller.profiles') }}"
                            enctype="multipart/form-data" data-redirect="true">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="name" name="name"
                                    value="{{ $user->seller->name }}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" id="email" name="email"
                                    value="{{ $user->seller->email }}"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <textarea name="address" id="address" class="form-control" cols="30" rows="10">{{ $user->seller->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="phone" value="{{ $user->seller->phone }}" name="phone" placeholder="Phone Number">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" id="username" name="username"
                                    value="{{ $user->username }}" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password"
                                    placeholder="Password">
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
