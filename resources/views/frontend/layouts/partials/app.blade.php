@extends('frontend.layouts.base')

@section('app')
<!-- Top Nav -->
@include('frontend.layouts.partials.topbar')

<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper">
    @yield('ajax')
  </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-shadow">
  <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
  </p>
</footer>
<!-- END: Footer-->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/extensions/tether.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/shepherd.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/notify/js/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.checkboxes.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/datatables-select/dataTables.select.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/autonumeric/autoNumeric.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/ui/prism.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/wNumb.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/nouislider.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-shop.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- END: Page JS-->
@endsection