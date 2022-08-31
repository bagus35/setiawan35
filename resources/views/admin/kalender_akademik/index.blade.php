@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Kalender Akademik</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Kalender Akademik</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Kalender Akademik
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th width="60%">Judul</th>
                                        {{-- <th width="50%">Isi</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kalender as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->file }}</td>
                                            <td>
                                                <form action="{{ route('kalender_akademik.destroy', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Extra large modal -->
    <div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kalender Akademik</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kalender_akademik.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            {{-- <div class="form-group">
                                <label for="gambar">Gambar Kalender Akademi</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('gambar') is-invalid @enderror" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    @error('gambar')
                                        Gambar tidak boleh kosong.
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <label for="judul_file">Judul File </label>
                                <input type="text" name="judul_file" value="{{ old('judul_file') }}"
                                    class="form-control @error('judul_file') is-invalid @enderror"
                                    placeholder="judul.pdf/xlx/csv">
                                <div class="text-danger">
                                    @error('judul_file')
                                        Judul file tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="file">File Kalender Akademik</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('file') is-invalid @enderror" name="file">
                                        <label class="custom-file-label" for="file">Pilih File</label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    @error('file')
                                        File tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
        $("#Kalender").addClass("active");
    </script>
@endsection