<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                {{-- <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li> --}}
            </ul>
        </div>
        <!-- Horizontal menu content-->
        @php
            $productCategories = DB::table('product_categories')->get();
            $brands = DB::table('brands')->get();
        @endphp
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link"><i class="feather icon-home"></i><span>Beranda</span></a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-box"></i><span data-i18n="Dashboard">Product Categories</span></a>
                    <ul class="dropdown-menu">
                        @foreach ($productCategories as $item)
                            <li data-menu=""><a class="dropdown-item" href="{{ route('home',['category'=>$item->name]) }}" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-activity"></i>{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-list"></i><span data-i18n="Dashboard">Brands</span></a>
                    <ul class="dropdown-menu">
                        @foreach ($brands as $item)
                            <li data-menu=""><a class="dropdown-item" href="{{ route('home',['brand'=>$item->name]) }}" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-activity"></i>{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carts') }}" class="nav-link"><i class="feather icon-shopping-cart"></i><span>Carts</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->