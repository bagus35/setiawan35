<footer class="py-4 footer-area" style="background-color: gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h4>Download</h4>
                <hr>
                <div class="single-footer-widget tp-widgets">
                    <div class="ms-1">
                        <div class="sm-head">
                            <i class="fas fa-angle-right"></i>
                            <p>Kalender Akademik</p>
                        </div>
                        <div class="sm-head">
                            <i class="fas fa-angle-right"></i>
                            <p>Pnduan Magang</p>
                        </div>
                        <div class="sm-head">
                            <i class="fas fa-angle-right"></i>
                            <p>Modul Mahasiswa</p>
                        </div>
                        <div class="sm-head">
                            <i class="fas fa-angle-right"></i>
                            <p>Catatan Mahasiswa(CM)</p>
                        </div>
                        <div class="sm-head">
                            <i class="fas fa-angle-right"></i>
                            <p>Sistem Nilai </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-12 mb-3 mb-md-0">
                <h4>Link Penting </h4>
                <hr>
                <ul class="list-unstyled list-text">
                    <li><i class="fas fa-angle-right"></i><a href="">BAN-PT Akreditasi Program Studi</a> </li>
                    <li><i class="fas fa-angle-right"></i><a href="">Forlap Dikti- RISTEKDIKTI</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">SIAKAD (SISTEM AKADEMIK)</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">E-LEARNING MEDICOM</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="">E-JOURNAL MEDICOM</a></li>
                </ul>
            </div> --}}

            <div class="col-lg-3 col-md-6 col-sm-12 mb-3 mb-md-0">
                <h4>Program Studi</h4>
                <hr>
                <ul class="list-unstyled list-text">
                    <li><i class="fas fa-angle-right"></i><a href="#"><i class="icon-check"></i>
                            Teknologi Rekayasa Perangkat Lunak</a></li>
                    <li><i class="fas fa-angle-right"></i><a href="#"><i class="icon-check"></i> Teknologi Rekayasa Perangkat Komputer</a>
                    </li>
                    <li><i class="fas fa-angle-right"></i><a href="#"><i class="icon-check"></i>
                            Bisnis Digital</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">
                <h4>Contact US</h4>
                <hr>
                <div class="single-footer-widget tp-widgets">
                    <div class="ms-1">
                        <div class="sm-head">
                            <i class="fas fa-map-marker"></i>
                            <p>Kampus : <br>Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461</p>

                        </div>
                        <div class="sm-head">
                            <i class="fas fa-envelope"></i>
                            <p>poliwangi.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="scrolltotop_parent" class="top-up">
        <div tabindex="0" id="scrolltotop_arrow"> <i class="fas fa-arrow-up"></i>
        </div>
    </div>


</footer>

<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/slick.min.js') }}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/js/scrolltotop_arrow_code.js') }}"></script>
<script src="{{ url('assets/js/venobox.min.js') }} "></script>
<script src="{{ url('assets/js/script.js') }}"></script>
<script src="{{ url('assets/js/aos.js') }}"></script>
<!-- Select2 -->
<script src="{{ url('plugins/select2/js/select2.full.min.js') }}"></script>

<!-- Galery -->
<script src="{{ url('assets/js/lightgallery.js') }}"></script>
<script src="{{ url('assets/js/lg-pager.js') }}"></script>
<script src="{{ url('assets/js/lg-autoplay.js') }}"></script>
<script src="{{ url('assets/js/lg-fullscreen.js') }}"></script>
<script src="{{ url('assets/js/lg-zoom.js') }}"></script>
<script src="{{ url('assets/js/lg-share.js') }}"></script>
@yield('script')
</body>

</html>
