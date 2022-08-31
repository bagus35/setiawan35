@extends('layout_admin.template')
@section('heading', 'Edit Fasilitas')

@section('page')
    <li class="breadcrumb-item active">Fasilitas</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('event.update', $event->id_event) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="gambar_banner">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('gambar_banner') is-invalid @enderror"
                                                name="gambar_banner">
                                            <label class="custom-file-label" for="gambar_banner">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar_banner')
                                            Gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="judul_event">Judul Event </label>
                                    <input type="text" name="judul_event" value="{{ $event->judul_event }}"
                                        class="form-control @error('judul_event') is-invalid @enderror"
                                        placeholder="judul_event Banner">
                                    <div class="text-danger">
                                        @error('judul_event')
                                            Judul Event tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" name="deskripsi" value="{{ $event->deskripsi }}"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        placeholder="deskripsi Banner">
                                    <div class="text-danger">
                                        @error('deskripsi')
                                            deskripsi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link Video </label>
                                    <input type="text" name="link" value="{{ $event->link }}" class="form-control"
                                        placeholder="poliwangi.ac.id">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-between">
                                <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-6 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ Storage::url($event        ->gambar) }}" class="img img-thumbnail" alt="" width="50%" />
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Extra large modal -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#back').click(function() {
                window.location = "{{ route('event.index') }}";
            });
        });

        $(document).ready(function() {

            bsCustomFileInput.init();
        });

        $("#Event").addClass("active");

    </script>

@endsection
