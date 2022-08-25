<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shrotcut icon" href="{{ url('assets/images/poliwangi.png') }}">
    <title>Teknik Informatika</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ url('assets/themify-icons/themify-icons.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <!-- lightgallery css -->
    <link rel="stylesheet" href="{{ url('assets/css/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}">

    <!-- Filepond stylesheet -->
    <link href="{{ url('plugins/filepond/css/filepond.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
</head>


    <header class="fixed-top header">
        <div class="top-header py-1 header bg-top" style="background-color: rgb(116, 111, 111)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-start">
                        <div class="main-info-area">
                            <div class="left-section wrap-logo-top">
                                <a href="{{ url('/') }}" class="link-to-home"><img
                                        src="{{ asset('assets/images/TI.png') }}" alt="Teknik Informatika" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')

    </header>
    <body>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 bg-dark"
        data-background="{{ asset('assets/images/gedung.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="mb-0 text-uppercase">@yield('heading')</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="custom-breadcrumns">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-3 fas fa-angle-right"></span>
            @yield('page')
        </div>
    </div>
    </body>
    @yield('content')

    @include('layouts.footer')
