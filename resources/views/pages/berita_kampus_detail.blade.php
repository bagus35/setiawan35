@extends('layouts.index')
@section('heading', 'Berita Kampus')
@section('page')
    <a href="{{ route('berita') }}" class="text-capitalize">Berita</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $berita->judul_berita }} </span>
@endsection
@section('content')
    {{-- Informasi berita Detail  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="berita-detail">
                        <h2 class="text-center">{{ $berita->judul_berita }}</h2>
                        <div class="divider mx-auto mb-2"></div>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item text-grey"> <b>Post:</b>
                                @if ($berita->user_id == 1)
                                    BAAK
                                @elseif ($berita->user_id ==2)
                                    KA. Prodi
                                @else
                                    Kemahasiswaan
                                @endif
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"> </i>:
                                {{ tanggal('hari', $berita->created_at) }}
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                                {{ time_elapsed_string($berita->created_at) }}</li>
                        </ul>
                        <img src="{{ Storage::url($berita->gambar) }}" alt="" class="img-fluid">
                        <p class="mt-3">{!! $berita->isi !!}</p>
                    </div>
                </div>

                <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box">
                        <h3>Popular Articles</h3>
                        @foreach ($berita_populer as $item)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img me-2"
                                    style="background-image: url({{ Storage::url($item->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('berita.detail', $item->slug_berita) }}">{{ $item->judul_berita }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div><span class="fas fa-calendar"></span>
                                            {{ tanggal('hari', $item->created_at) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- END COL -->
            </div>
        </div>
    </section>
  
@endsection
