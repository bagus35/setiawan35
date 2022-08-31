@extends('layouts.index')
@section('heading', 'Fasilitas')

@section('page')
<a href="" class="">Akademik</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Fasilitas</span>
@endsection

@section('content')
    <!--Biaya Begin -->
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="line pb-4">
                            <h3 class="text-center text-capitalize">Ruangan</span>
                            </h3>
                            <div class="underline"></div>
                        </div>
                    </div>
                </div>

                <!-- Ruang Belajar Begin -->
                <div class="instagram" id="galery">
                    <div class="row d-flex justify-content-center demo-gallery">
                        <ul id="lightgallery" class="list-unstyled">
                        @foreach ($fasilitas as $data)
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar1) }}"
                                data-sub-html="<h4>Ruang Belajar</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar1) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar2) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar2) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar3) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar3) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-12 mb-3" data-src="{{ Storage::url($data->gambar4) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar4) }}" alt="Thumb-1" />
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Ruang Belajar End -->
                <!-- Ruang Praktek Begin -->
                <div class="instagram" id="galery">
                    <div class="line pb-4">
                        <h3 class="text-center text-capitalize">Fasilitas</span>
                        </h3>
                        <div class="underline"></div>
                    </div>
                    @foreach ($fasilitas as $data)
                    <div class="row d-flex justify-content-center demo-gallery">
                        <ul id="lightgallery1" class="list-unstyled">
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar5) }}"
                                data-sub-html="<h4>Ruang Belajar</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar5) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar6) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href=""> <img class="img-responsive" src="{{ Storage::url($data->gambar6) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="{{ Storage::url($data->gambar7) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar7) }}" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-12 mb-3" data-src="{{ Storage::url($data->gambar8) }}"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                <img class="img-responsive" src="{{ Storage::url($data->gambar8) }}" alt="Thumb-1" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!-- Ruang Praktek End -->
            </div>
        </div>
    </section>
    <!--Biaya  End -->

@endsection

@section('script')
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'));
        lightGallery(document.getElementById('lightgallery1'));
        $("#fasilitas").addClass("active");
    </script>

@endsection