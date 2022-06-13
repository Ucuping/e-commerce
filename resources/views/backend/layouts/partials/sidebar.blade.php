<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Vuexy</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    {{-- <div class="shadow-bottom"></div> --}}
    <div class="main-menu-content mt-2">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- <li class=" navigation-header"><span>Dashboard</span>
            </li> --}}
            @can('read-dashboard')
                <li class=" nav-item"><a href="{{ route('sellers.dashboard') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Email">Dashboard</span></a>
            @endcan

            <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class=" nav-item"><a href="{{ route('sellers.products') }}"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Email">Product</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Chat">Order</span></a>
            </li>
            <li class=" nav-item"><a href="app-email.html"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Email">Edit Profile</span></a>
            </li>

            <li class=" navigation-header"><span>Setting</span>
            </li>
            <li class=" nav-item"><a href="app-email.html"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Email">Setting Brand</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->