@extends('layouts.index')
@section('heading', 'Kerjasama dan Magang')
@section('page')
    <span class="current">Magang</span>
@endsection
@section('content')

    {{-- Kurikulum Begin --}}
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-informasi pb-4">
                            <h3 class="text-center text-capitalize">Magang
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title pb-4">
                                <a> Pengertian internship atau magang adalah suatu program belajar sekaligus berlatih bekerja dengan cara langsung pada sebuah perusahaan selama beberapa waktu. Perusahaan yang menerima karyawan magang berhak memberi tugas dan wajib memberi bimbingan selama program. Di akhir program, peserta magang akan mendapat penilaian dari pihak perusahaan, terutama dari atasannya langsung. </a>
                                <br>
                                <a> Kamu mungkin juga pernah mendengar istilah PKL atau Praktek Kerja Lapangan. Meski pada dasarnya sama saja, perbedaan magang dan PKL hanyalah sebatas penggunaan istilahnya saja. Istilah PKL biasanya mengacu pada program magang di jenjang SMK dan diploma. Sementara, untuk jenjang perkuliahan S1 dan S2, istilah internship atau magang lebih umum digunakan.</a>
                        </div>

                        <div class="section-informasi">
                            <h4 class="mb-1">Tujuan Magang Bagi Mahasiswa </h4>
                        </div>
                        <div class="section-title pb-4">
                            <ol>
                                <li> Implementasi Ilmu ke Pekerjaan</li>
                                <li> Meningkatkan Hard Skill</li>
                                <li> Mempelajari Berbagai Soft Skill</li>
                                <li> Adaptasi dengan Dunia Kerja</li>
                                <li> Memudahkan Karir Sebagai Fresh Graduate Nanti</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Kurikulum End --}}

    {{-- ALumni  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-informasi pb-4">
                            <h3 class="text-center text-capitalize">Kerjasama Industri
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- course item -->
                @foreach ($magang as $item)
                    {{-- <div class="col-lg-3 col-sm-6 mb-5"> --}}
                    <div class="testimoni-alumni hover-shadow">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img" style="background-image: url({{ Storage::url($item->gambar) }});"></div>
                        </div>
                        <p class="text-center">Kerjasama Industri</p>
                        <div class="card-alumni">
                            <h4 class="title-alumni">{{ $item->nama_perusahaan }}</h4>
                            <h3 class="title-work mb-1">Alamat{{ $item->alamat }}</h3>
                        </div>
                        <span> <a href="{{ $item->link }}"
                                class="btn text-center w-75 btn-primary-outline mb-2 btn-sm">Lihat
                                Selengkapnya</a></span>

                    </div>
                    {{-- </div> --}}
                @endforeach
                <!-- course item -->
            </div>
            {{ $magang->links('vendor.pagination.bootstrap-4') }}
            <!-- /course list -->
        </div>
    </section>
    {{-- ALumni   end --}}

@endsection