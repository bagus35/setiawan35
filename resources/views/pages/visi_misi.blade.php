@extends('layouts.index')
@section('heading', 'Visi, Misi Politeknik Negri Banyuwangi')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Visi Misi</span>
@endsection
@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="section-title pb-4">
                            <h4 class="text-center">VISI</h4>
                            <p> VISI
                                Visi Politeknik Negeri Banyuwangi adalah :
                                Menjadi Lembaga Pendidikan Tinggi vokasional yang bermutu, berkemampuan ilmu pengetahuan dan teknologi, inovatif, dan berdaya saing.
                                </p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MISI</h4>

                            <p>Menyelenggarakan pendidikan yang bermutu sesuai standar nasional pendidikan tinggi untuk menghasilkan lulusan yang kompeten dan profesional;
                                Melaksanakan penelitian terapan dan pengabdian kepada masyarakat dalam rangka meningkatkan kualitas Sivitas Akademika sesuai dengan permasalahan industri dan masyarakat.
                                Meningkatkan akses, relevansi, kemampuan ilmu pengetahuan dan teknologi dan invoasi untuk sumber daya manusia yang berkualitas.</p>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visi Misi End -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>

@endsection
