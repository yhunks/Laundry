<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap & Vali Admin Template -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- JS SweetAlert -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Laundry @yield('title')</title>
</head>

<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Laundry</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i> {{ Auth::user()->name }} </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button class="dropdown-item" style="cursor:pointer" type="submit" data-toggle="modal"
                                data-target="#logoutModal"><i class="fa fa-sign-out fa-lg"></i> Keluar</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">

            <li><a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon fa fa-home"></i><span
                        class="app-menu__label">Beranda</span></a>
            </li>

            @can('manage-outlets', $user ?? '')
            <li class="nav-item">
                <a class="app-menu__item" href="{{route('outlets.index')}}">
                    <i class= "app-menu__icon fas fa-box-open"></i>
                    <span class="app-menu__label">Manage Outlets</span></a>
            </li>
            @endcan

            @can('manage-users', $user ?? '')
            <li class="nav-item">
                <a class="app-menu__item" href="{{route('users.index')}}">
                    <i class="fas app-menu__icon fa-users"></i>
                    <span class="app-menu__label">Manage Users</span></a>
            </li>
            @endcan

            @can('manage-members', $user ?? '')
            <li class="nav-item">
                <a class="app-menu__item" href="{{route('members.index')}}">
                    <i class="fas app-menu__icon fa-user-alt"></i>
                    <span class="app-menu__label">Manage Members</span></a>
            </li>
            @endcan

            @can('manage-packets', $user ?? '')
            <li class="nav-item">
                <a class="app-menu__item" href="{{route('packets.index')}}">
                    <i class= "app-menu__icon fas fa-box-open"></i>
                    <span class="app-menu__label">Manage Packets</span></a>
            </li>
            @endcan

            @can('manage-invoice', $user ?? '')
            <li class="nav-item">
                <a class="app-menu__item" href="{{route('transactions.index')}}">
                    <i class="fas app-menu__icon fa-file-invoice"></i>
                    <span class="app-menu__label">Manage Invoice</span></a>
            </li>
            @endcan

            <li>
                <a class="app-menu__item" href="#logoutModal" data-toggle="modal" data-target="#logoutModal">
                    <i class="app-menu__icon fas fa-sign-out-alt "></i>
                    <span class="app-menu__label">Keluar</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan tombol <b>Keluar</b> untuk keluar dari Aplikasi Warga.</div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-primary" style="cursor:pointer">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="app-content">
        @yield('content')
    </main>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('footer-scripts')
    @yield('snap-js')
    <script src="https://kit.fontawesome.com/20e16e5617.js"></script>


</body>

</html>
