<!-- navbar -->
<div class="navigation w-100 " >
    <nav class="navbar navbar-expand-lg navbar-light  "style="background-color: rgb(190, 186, 186)">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <i class="fas fa-home" style="color: gray"></i> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  dropdown" id="profile" >
                        <a class="nav-link  dropdown-toggle" href="#" id="menu_sejarah" role="button "
                            data-bs-toggle="dropdown" aria-expanded="false">TENTANG KAMI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('sejarah') }}" id="sejarah">Sejarah</a></li>
                            <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi Misi Moto</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">ORGANISASI
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('dosen') }}">Dosen</a></li>
                            <li>
                               <a class="dropdown-item" href="{{ route('teknisi') }}">Teknisi</a>
                            </li>
                        </ul>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">AKADEMIK
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item_sub dropdown-submenu">
                                <a class="dropdown-item" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">Program Studi <i
                                        class="fas fa-angle-right"></i>
                                </a>
                                <ul class="dropdown-submenu1" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">D4-TRPL</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('prodi_tk') }}">D4-Teknik Rekayasa Komputer</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('prodi_ka') }}">D4-Bisnis Digital</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('kalender_akademik') }}">Kalender Akademik</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fasilitas') }}">Fasilitas</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">MAHASISWA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">SIAKAD</a></li>
                            <li><a class="dropdown-item" href="#">Beasiswa</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Prestasi Mahasiswa</a>
                            </li>
                        </ul>
                    </li> --}}
                    </li>
                    <li class="nav-item" id="magang">
                        <a class="nav-link" href="{{ route('kerjasama_magang') }}">Magang</a>
                    </li>

                    <li class="nav-item" id="event">
                        <a class="nav-link" href="{{ route('event') }}">EVENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kontak" href="{{ route('kontak') }}">KONTAK</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" id="login" style="color: rgb(211, 200, 200)" href="{{ route('login') }}">LOGIN</a>
                    <style>
                        #login{
                            background-color: gray;  
                            padding-right   : 20px;  
                            padding-left    : 20px;    
                            

                        }
                    </style>   
                    </li>
                </ul>
                {{-- <div class="col-lg-4 mb-2 col-sm-12 d-flex justify-content-right text-sm-right text-lg-end">
                    <a class="login"href="{{ route('login') }}" class="btn-login my-auto bg-transparent "><span
                            class="fas fa-users mx-1"></span> Login</a>

                        <style>
                            .login{
                                color: aliceblue
                            }
                            </style> 
                </div> --}}
            </div>
        </div>
            </div>
        </div>
    </nav>
</div>
{{-- navbar --}}
