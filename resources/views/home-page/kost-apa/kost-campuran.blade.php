<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOME</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!--Bolstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!--select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="..." style="width: 30px; height: 30px; margin-left: 8px;">
            SEWA KOST
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Kost
                        Apa?</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Kost Putra</a></li>
                        <li><a class="dropdown-item" href="#">Kost Putri</a></li>
                        <li><a class="dropdown-item" href="#">Kost Campuran</a></li>
                    </ul>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pusat Bantuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Syarat & Ketentuan</a>
                </li>
            </ul>
            <form class="d-flex ms-2" role="search">
                <button class="btn btn-outline-success" data-toggle="modal" data-target="#modalUserLogin" type="button">
                    Masuk
                </button>
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="filter-buttons my-3">
                <button class="btn btn-outline-secondary">
                    <i class="fas fa-users">
                    </i>
                    Semua Tipe Kos
                </button>
                <button class="btn btn-outline-secondary">
                    Bulanan
                </button>
                <button class="btn btn-outline-secondary">
                    Harga
                </button>
                <button class="btn btn-outline-secondary">
                    Fasilitas
                </button>
                <button class="btn btn-outline-secondary">
                    Aturan Kos
                </button>
            </div>
            <div class="filter-tags mb-3">
                <button class="btn btn-outline-danger">
                    Promo Ngebut
                </button>
                <button class="btn btn-outline-secondary">
                    Dikelola Mamikos
                </button>
                <button class="btn btn-outline-secondary">
                    Kos Andalan
                </button>
                <button class="btn btn-outline-secondary">
                    Paling direkomendasikan
                </button>
            </div>
            <p>
                Ditemukan 544 kos-kosan di sekitar Jabodetabek
            </p>
            <div class="property-card">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="Simple room with a single bed and a small table" height="100"
                             src="https://storage.googleapis.com/a1aa/image/bFfKlSxaLfiPBULNPTPU0VYmeZT6AJ6Xs0yeZBrtCMT8fVVdC.jpg"
                             width="150"/>
                    </div>
                    <div class="col-md-8">
                        <span class="badge bg-primary">apik</span>
                        <span class="badge bg-secondary">Putra</span>
                        <h5>
                            Kost Apik Rumah Deka Tipe A Pondok Aren Tangerang Selatan Pondok Aren
                        </h5>
                        <p> WiFi • Kasur • Akses 24 Jam</p>
                        <p class="price">
                            <span class="discount"> ⚡ Diskon 68rb </span>
                            Rp705.000
                        </p>
                        <p class="price">
                            Rp637.000
                            <span class="text-muted">(Bulan pertama)</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="property-card">
                <div class="row">
                    <div class="col-md-4">
                        <img alt="Simple room with a single bed and a small table" height="100"
                             src="https://storage.googleapis.com/a1aa/image/bFfKlSxaLfiPBULNPTPU0VYmeZT6AJ6Xs0yeZBrtCMT8fVVdC.jpg"
                             width="150"/>
                    </div>
                    <div class="col-md-8">
        <span class="badge bg-primary">
         apik
        </span>
                        <span class="badge bg-secondary">
         Putri
        </span>
                        <h5>
                            Kost Apik Pondok Ardhan Tipe B Pondok Aren Tangerang Selatan Pondok Aren
                        </h5>
                        <p>
                            WiFi • Kasur
                        </p>
                        <p class="price">
         <span class="discount">
          ⚡ Diskon 81rb
         </span>
                            Rp835.000
                        </p>
                        <p class="price">
                            Rp754.000
                            <span class="text-muted">
          (Bulan pertama)
         </span>
                        </p>
                        <p>
         <span class="badge bg-success">
          5.0
         </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Mangil Modal--}}
@include('modal')

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('assets/js/demo/datatables-demo.js')}}"></script>

<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

<!--select2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>
