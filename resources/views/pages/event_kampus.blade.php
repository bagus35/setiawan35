@extends('layouts.index')
@section('heading', 'event Kampus')
@section('page')
    <span class="current">event</span>
@endsection
@section('content')

    {{-- Informasi event  begin --}}
    <section class="event__kampus">
        <div class="container">
            <div class="row">
                @foreach ($event as $item)
                    <div class="col-md-6 col-lg-4 ">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumnail">
                                    <a href="{{ route('event.detail', $item->slug_event) }}"><img
                                            src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid"></a>
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ tanggal('tanggal', $item->publish) }}</span>
                                        <span class="mos">{{ tanggal('bulan', $item->publish) }}</span>
                                        <span class="yr">{{ tanggal('tahun', $item->publish) }}</span>
                                    </div>
                                </div>
                                <div class="text bg-white event p-4">
                                    <h3 class="heading"><a
                                            href="{{ route('event.detail', $item->slug_event) }}">{{ $item->judul_event }}</a>
                                    </h3>
                                    <p><?= Str::limit(strip_tags($item->isi), 100, $end = '...') ?></p>
                                            <div class="d-flex align-items-center mt-4">
                                                <p class="mb-0"><a href="{{ route('event.detail', $item->slug_event) }}"
                                                        class="btn-read btn-more">Read
                                                        More <span class="fa fa-arrow-right"></span></a></p>
                                                <p class="ms-auto mb-0">
                                                    <a href="#" class="me-2">Admin</a>
                                                    <a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Informasi event  end --}}

@endsection
