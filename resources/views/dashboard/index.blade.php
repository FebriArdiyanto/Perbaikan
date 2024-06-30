<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; BRI.STORE</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logss.png') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styledash.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Febri</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <img src="{{asset('assets/img/bri.png')}}" style="width:70px; height: 70px;" >
                    <a href="index.html">BRI.STORE</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <img src="{{asset('assets/img/bri.png')}}" style="width:60px; height: 60px;">
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">MAIN MENU</li>
                    <li class="menu"><a class="nav-link" href="#"><i class="fas fa-laptop"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="menu"><a class="nav-link" href="/products"><i class="fas fa-book"></i>
                            <span>Product</span></a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <!-- style="background-color: white;" -->
            <div class="col-l-12">
                <div class="cardBox center">
                    @foreach ($indices as $indice)
                        <div class="card wider">
                            <div>
                                <div class="numbers">{{ $indice->id }}</div>
                                <div class="cardName">Produk</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="card wider">
                            <div>
                                <div class="numbers">{{ $indice->price }}</div>
                                <div class="cardName">Total Harga</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/maindash.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
<style>
    .center {
        display: flex;
        justify-content: center;
        gap: 20px; /* Jarak antar kartu */
    }

    .wider {
        width: 300px; /* Lebar kartu, Anda dapat menyesuaikan sesuai kebutuhan */
        text-align: center;
    }

    .card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .numbers {
        font-size: 2em;
        font-weight: bold;
    }

    .cardName {
        margin-top: 10px;
        font-size: 1.2em;
    }

    .iconBx {
        margin-top: 15px;
    }

    ion-icon {
        font-size: 2em;
    }
</style>
</html>
