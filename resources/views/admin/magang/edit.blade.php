@extends('layout_admin.template')
@section('heading', 'Edit Magang')

@section('page')
    <li class="breadcrumb-item active">Magang</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('magang.update', $magang->id_magang) }}" method="post"
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
                                    <label for="nama_perusahaan">Nama Perusahaan </label>
                                    <input type="text" name="nama_perusahaan" value="{{ $magang->nama_perusahaan }}"
                                        class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                        placeholder="nama_perusahaan Banner">
                                    <div class="text-danger">
                                        @error('nama_perusahaan')
                                            Nama Perusahaan tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" value="{{ $magang->alamat }}"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        placeholder="alamat Banner">
                                    <div class="text-danger">
                                        @error('alamat')
                                            Alamat tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" value="{{ $magang->link }}" class="form-control"
                                        placeholder="https://id.wikipedia.org">
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
                            <img src="{{ Storage::url($magang->gambar) }}" class="img img-thumbnail" alt="" width="50%" />
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
                window.location = "{{ route('magang.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Magang").addClass("active");

    </script>

@endsection
