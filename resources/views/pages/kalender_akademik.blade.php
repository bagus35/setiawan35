@extends('layouts.index')
@section('heading', 'akademi')
@section('page')
    <a href="" class="">akademi</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Kalender</span>
@endsection
@section('content')

    {{-- Kurikulum Begin --}}
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-informasi pb-4">
                            <h3 class="text-center text-capitalize">
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-informasi">
                            <h4 class="mb-1">Kalender Tahun 2022/2023 </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                @foreach ($kalender as $item)
                                    {{-- <div class="section-title pb-4" style="text-align: center">
                                        <img width="1000px" src="{{ Storage::url($g->gambar) }}">
                                    </div> --}}
                                    <div>
                                        <h2 class="heading"><a href="#">{{ $item->judul_file }}</a> </h2>
                                    </div>
                                <div style="text-align"> 
                                    <h3 class="title-work mb-1" src="{{ Storage::url($item->judul_file) }}"></h3>
                                    <a href="{{ Storage::url($item->file) }}"><span
                                            class="button"><b>Download</b></span></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Kurikulum End --}}

@endsection
