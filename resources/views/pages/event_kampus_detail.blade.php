@extends('layouts.index')
@section('heading', 'event Kampus')
@section('page')
    <a href="{{ route('event') }}" class="text-capitalize">event</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $event->judul_event }} </span>
@endsection
@section('content')
    {{-- Informasi event Detail  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="event-detail">
                        <h2 class="text-center">{{ $event->judul_event }}</h2>
                        <div class="divider mx-auto mb-2"></div>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item text-grey"> <b>Post:</b>
                                @if ($event->user_id == 1)
                                    BAAK
                                @elseif ($event->user_id ==2)
                                    KA. Prodi
                                @else
                                    Kemahasiswaan
                                @endif
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"> </i>:
                                {{ tanggal('hari', $event->created_at) }}
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                                {{ time_elapsed_string($event->created_at) }}</li>
                        </ul>
                        <img src="{{ Storage::url($event->gambar) }}" alt="" class="img-fluid">
                        <p class="mt-3">{!! $event->isi !!}</p>
                    </div>
                </div>

                <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box">
                        <h3>Popular Articles</h3>
                        @foreach ($event_populer as $item)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img me-2"
                                    style="background-image: url({{ Storage::url($item->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a
                                            href="{{ route('event.detail', $item->slug_event) }}">{{ $item->judul_event }}</a>
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
