<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shrotcut icon" href="{{ url('assets/images/poliwangi.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- Latest compiled and minified CSS -->
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- slick slider -->
<link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
<!-- animation css -->
<link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
<!-- venobox css -->
<link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
<link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
<!-- aos css -->
<link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
{{-- js --}}
<link rel="stylesheet" href="{{ url('assets/js/boostrap.bundle.min.js') }}" />
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
    <title>Teknik Informatika</title>
</head>

<body>
    <header class="fixed-top header" style="background-color: rgb(116, 111, 111)">
        <div class="top-header py-1 header">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="row">
                    <div class="col-lg-3 text-start">
                        <div class="main-info-area">
                            <div class="left-section wrap-logo-top">
                                <a href="{{ url('/') }}" class="link-to-home"><img
                                        src="assets/images/TI.png" alt="INFORMATICS ENGINEERING" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')

    </header>
</body>

    @yield('content')

    @include('layouts.footer')
