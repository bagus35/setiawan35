@extends('layouts.home')
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="{{ asset('assets/images/ged.jpg') }}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <!-- slider item -->
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    {{-- <!-- Pengumuman -->
    <div class="news-updates">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-pengumuman">
                        <div class="section-heading d-flex align-items-center justify-content-between">
                            <h2 class="text-black">Pengumuman</h2>
                            <a href="{{ route('home.pengumuman') }}" class="btn btn-primary-outline">Selengkapnya<i
                                    class="fas fa-angle-double-right mx-2"></i></a>
                        </div> --}}
                        {{-- @foreach ($pengumuman as $item)
                            <div class="post-entry-big mb-1">
                                <div class="icon-tanggal me-2">
                                    <div class="meta-date text-center">
                                        <span class="day">{{ date('d', strtotime($item->tgl_publish)) }}</span>
                                        <span class="mos">{{ date('M', strtotime($item->tgl_publish)) }}</span>
                                        <span class="yr">{{ date('Y', strtotime($item->tgl_publish)) }}</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-heading">
                                        <a href="{{ route('pengumuman.detail', $item->slug_pengumuman) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="tooltip"
                                            title="{{ $item->judul_pengumuman }}">{{ $item->judul_pengumuman }}
                                        </a>
                                    </div>
                                    <p>Baca detail..</p>
                                    <p class="details">
                                        <span class="details-item time"><i class="fas fa-eye ms-1"></i>
                                            {{ $item->view }}</span>
                                        <span class="details-item time "><i class="fas fa-clock"></i>
                                            {{ time_elapsed_string($item->created_at) }}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                <div class=" section-sm">
                    <div class="card-pengumuman">
                        <div class="section-heading d-flex align-items-center justify-content-between">
                            <h2 class="mb-0 text-nowrap me-3">Politeknik Negeri Banyuwangi</h2>
                            <a href="{{ route('event') }}" class="btn btn-primary-outline">Selengkapnya<i
                                    class="fas fa-angle-double-right mx-2"></i></a>
                        </div>
                        <div class="owl-slide-3 owl-carousel">
                            @foreach ($event as $item)
                                <div class="course-1-item">
                                    <figure class="thumnail">
                                        <a href="{{ route('event.detail', $item->slug_event) }}"><img
                                                src="{{ Storage::url($item->gambar) }}" alt="Image"
                                                class="img-fluid"></a>
                                    </figure>
                                    <div class="course-1-content">
                                        <h2> <a
                                                href="{{ route('event.detail', $item->slug_event) }}">{{ Str::limit($item->judul_event, 45, '...') }}</a>
                                        </h2>
                                        <p class="desc">
                                            {!! Str::limit(strip_tags($item->isi), $limit = 50, $end = '...') !!}</p>
                                        <div class="link">
                                            <a href="{{ route('event.detail', $item->slug_event) }}"
                                                class="btn btn-primary-outline text-center">Baca
                                                Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pengumuman -->

    
                <!-- course item -->
            </div>
            <!-- /course list -->
        </div>
    </section>

    <!-- Video -->
    <section class="section-sm">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap me-3">Video Kampus</h2>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-between">
                <!-- course item -->
                <div class="col-lg-6 col-md-6 mb-3 position-relative">

                    <iframe width="100%" height="310" src="https://www.youtube.com/embed/WkCQrcMp4Rk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
                <div class="col-lg-6 col-md-6 mb-3 position-relative">
                    <iframe width="100%" height="310" src="https://www.youtube.com/embed/Bi1qU8BMf_g"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <!-- course item -->
            </div>
            <!-- /course list -->
        </div>
    </section>
    <!-- /Video -->
@endsection

@push('script')
    <script>
        AOS.init();
    </script>
@endpush
