<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Fonts-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>Hello, world!</title>
    <Style>
        :root{
            --offcanvas-width:270px;
            --topnav-height:60px;
        }
        .sidebar-nav{
            width: var(--offcanvas-width);
        }

        .custom-nav{
            height: 60px!important;
        }

        @media (min-width:370px){
            .navbar-expand-ssm{flex-wrap:nowrap;justify-content:flex-start}
            .navbar-expand-ssm .navbar-nav{flex-direction:row}
            .navbar-expand-ssm .navbar-nav .dropdown-menu{position:absolute}
            .navbar-expand-ssm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}
            .navbar-expand-ssm .navbar-nav-scroll{overflow:visible}
            .navbar-expand-ssm .navbar-collapse{display:flex!important;flex-basis:auto}
            .navbar-expand-ssm .navbar-toggler{display:none}}
        @media(min-width:950px){
            .sidebar-nav{
                transform: none;
                visibility: visible!important;
                top:var(--topnav-height);
                height: calc(100%-var(--topnav-height));
            }
            .btn-canvas{
                display: none;
            }
        }
    </Style>

  </head>
  <body>
    <div id="app">
    <!--Navbar-->
    <nav class="navbar navbar-expand-ssm navbar-light bg-white shadow-sm no-gutters custom-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                    <button class="btn btn-canvas" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-start sidebar-nav drawer-light" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dasboard</h5>
                        <button type="button" class="btn-close text-reset btn-canvas" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="list-group list-group-flush">
                                <button type="button" class="list-group-item list-group-item-action" aria-current="true" data-bs-toggle="collapse" data-bs-target="#Penjualan" aria-expanded="false" aria-controls="Penjualan">
                                  <strong>Penjualan</strong>
                                </button>
                                <!--Menu Pembelian-->
                                <div class="list-group list-group-flush collapse" id="Penjualan">
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Permintaan Penjualan</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Pesanan Penjualan</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Faktur Pengiriman Barang</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Faktur Penjualan</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Penerimaan Piutang</button>
                                  </div>
                            </div>
                            <!--Menu Pembelian-->
                            <div class="list-group list-group-flush">
                                    <button type="button" class="list-group-item list-group-item-action" aria-current="true" data-bs-toggle="collapse" data-bs-target="#Pembelian" aria-expanded="false" aria-controls="Pembelian">
                                      <strong>Pembelian</strong>
                                    </button>
                                    <div class="list-group list-group-flush collapse" id="Pembelian">
                                        <button type="button" class="border-0 list-group-item list-group-item-action">Permintaan Pembelian</button>
                                        <button type="button" class="border-0 list-group-item list-group-item-action">Pesanan Pembelian</button>
                                        <button type="button" class="border-0 list-group-item list-group-item-action">Faktur Penerimaan</button>
                                        <button type="button" class="border-0 list-group-item list-group-item-action">Faktur Pembelian</button>
                                        <button type="button" class="border-0 list-group-item list-group-item-action">Pembayaran Utang</button>
                                      </div>
                            </div>
                            <!--Menu Persediaan-->
                            <div class="list-group list-group-flush">
                                <button type="button" class="list-group-item list-group-item-action" aria-current="true" data-bs-toggle="collapse" data-bs-target="#Persediaan" aria-expanded="false" aria-controls="Persediaan">
                                  <strong>Persediaan</strong>
                                </button>
                                <div class="list-group list-group-flush collapse" id="Persediaan">
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Daftar Persediaan</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Penyesuaian Persediaan</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Pemindahan Persediaan</button>
                                  </div>
                        </div>
                            <!--Menu BukuBesar-->
                            <div class="list-group list-group-flush">
                                <button type="button" class="list-group-item list-group-item-action" aria-current="true" data-bs-toggle="collapse" data-bs-target="#BukuBesar" aria-expanded="false" aria-controls="BukuBesar">
                                  <strong>BukuBesar</strong>
                                </button>
                                <div class="list-group list-group-flush collapse" id="BukuBesar">
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Jurnal Umum</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Rekonsiliasi Bank</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Pembayaran Lainnya</button>
                                    <button type="button" class="border-0 list-group-item list-group-item-action">Penerimaan Lainnya</button>
                                  </div>
                        </div>
                        </div>

                    </div>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    <!--Navbar End-->


    <div class="col mt-5">
        @yield('content')
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
