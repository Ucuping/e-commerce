<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register | E-commerce</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-6 col-12 justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                {{-- <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{ asset('app-assets/images/pages/register.jpg') }}" alt="branding logo">
                                </div> --}}
                                <div class="col-lg-12 col-6 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="{{ route('auth.register.check') }}" method="POST" data-request="ajax" data-redirect="true" data-success-callback="{{ route('auth.login') }}">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="role" checked value="Customer">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">Customer</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="role" value="Seller">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">Seller</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                                        <label for="name">Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
                                                        <label for="phone">Phone Number</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <textarea name="address" class="form-control" id="address" placeholder="Address" required></textarea>
                                                        <label for="address">Address</label>
                                                    </div>
                                                    <div class="brand-input"></div>
                                                    <div class="form-label-group">
                                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                                        <label for="username">Username</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" id="inputConfPassword" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms & conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('auth.login') }}" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/notify/js/bootstrap-notify.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('mods/mod_auth.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>