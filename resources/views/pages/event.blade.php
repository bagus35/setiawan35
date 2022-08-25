@extends('layouts.index')

@section('heading', 'Teknik Informatika')

@section('page')
    <span class="current">event</span>
@endsection

@section('content')
    <!--Biaya Begin -->
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="line pb-4">
                            <h3 class="text-center text-capitalize">Event   
                            </h3>
                            <div class="underline"></div>
                        </div>
                    </div>
                </div>

              

@endsection

@section('script')
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'));
        lightGallery(document.getElementById('lightgallery1'));


        $("#event").addClass("active");
    </script>

@endsection
