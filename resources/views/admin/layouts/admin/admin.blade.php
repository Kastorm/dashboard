<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name', 'I-SS.RU') }}</title>

    <meta name="description"
          content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- END Icons -->

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/codebase/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/codebase/themes/corporate.scss', 'resources/js/codebase/app.js']) --}}
    @yield('js')
</head>
<body>

<div id="page-container"
     class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Всплывающее меню с права-->
    @include('admin.includes.admin.sidebar_r')
    <!-- END Всплывающее меню с права -->

    <!-- Sidebar Меню с лева -->
    @include('admin.includes.admin.sidebar_l')
    <!-- END Sidebar Меня с лева -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center space-x-2">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i>
                </button>
                <!-- END Open Search Section -->

                <!-- Full Search -->
                <form class="d-none d-sm-inline-block" action="№" method="POST" onsubmit="return false;">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-text">
                  <i class="fa fa-search"></i>
                </span>
                    </div>
                </form>
                <!-- END Full Search -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fw-semibold">{{ Auth::user()->name }}</span>
                        <i class="fa fa-angle-down opacity-50 ms-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0"
                         aria-labelledby="page-header-user-dropdown">
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                               href="#">
                                <span>Profile</span>
                                <i class="fa fa-fw fa-user opacity-25"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="#">
                                <span>Inbox</span>
                                <i class="fa fa-fw fa-envelope-open opacity-25"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                               href="#">
                                <span>Invoices</span>
                                <i class="fa fa-fw fa-file opacity-25"></i>
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                               href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <span>Настройки</span>
                                <i class="fa fa-fw fa-wrench opacity-25"></i>
                            </a>
                            <!-- END Side Overlay -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <span>{{ __('Выход') }}</span>
                                <i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-list"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
            <div class="content-header">
                <form class="w-100" action="#" method="POST">
                    <div class="input-group">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-secondary" data-toggle="layout"
                                data-action="header_search_off">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-fw fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="far fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')

    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-extra-light">
        <div class="content py-1">
            <div class="row fs-sm">

                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                    <a class="fw-semibold" href="#" target="_blank">I-SS.RU</a> &copy; <span
                        data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

</body>
</html>
