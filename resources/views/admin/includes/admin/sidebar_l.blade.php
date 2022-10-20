<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center bg-black-10">
            <!-- Options -->
            <!-- Logo -->
            <div>
               <a class="link-fx fw-bold tracking-wide mx-auto" href="/home">
                <span class="smini-hidden">
                  <i class="fa fa-biohazard text-primary"> </i>
                  <span class="fs-4 text-white"> I-</span><span class="fs-4 text-primary">SS.RU</span>
                </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- END Options -->


        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{route('admin')}}">
                            <i class="nav-main-link-icon fa fa-bars-progress"></i>
                            <span class="nav-main-link-name">Admin Panel</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('admin')}}">
                            <i class="nav-main-link-icon fa fa-wallet"></i>
                            <span class="nav-main-link-name">Заявки</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-layer-group"></i>
                            <span class="nav-main-link-name">Журналы</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Управление</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('user.index')}}">
                            <i class="nav-main-link-icon fa fa-briefcase"></i>
                            <span class="nav-main-link-name">Пользователи</span>
                            <span class="badge badge-info right">{{$user_count}}</span>
                        </a>
                    </li>
                    <li class="nav-main-item">

                        <a class="nav-main-link" href="{{route('role.index')}}">
                            <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                            <span class="nav-main-link-name">Права</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                            <span class="nav-main-link-name">Заказчики</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-file-invoice-dollar"></i>
                            <span class="nav-main-link-name">Объекты</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Подрядчики</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Настройки</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-sticky-note"></i>
                            <span class="nav-main-link-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-lock"></i>
                            <span class="nav-main-link-name">Security</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>
