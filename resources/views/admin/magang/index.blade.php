@extends('layout_admin.template')
@section('heading', 'Kerjasama Industri dan Magang')

@section('page')
    <li class="breadcrumb-item active">Kerjasama dan Magang</li>
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
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Magang
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th width="20%">Nama Perusahaan</th>
                                        <th width="40%">Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($magang as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="{{ Storage::url($data->gambar) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->nama_perusahaan }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            </td>
                                            <td>
                                                <form action="{{ route('magang.destroy', $data->id_magang) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('magang.edit', Crypt::encrypt($data->id_magang)) }}"
                                                        class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i>
                                                        &nbsp; Edit</a>

                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
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
                    <h4 class="modal-title">Tambah Data Magang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('magang.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="gambar">Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input  @error('gambar') is-invalid @enderror"
                                            name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih File</label>
                                    </div>
                                </div>
                                <div class="text-danger">
                                    @error('gambar')
                                        Gambar tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_perusahaan">Nama Perusahaan </label>
                                <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}"
                                    class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                    placeholder="PT. Ternama">
                                <div class="text-danger">
                                    @error('nama_perusahaan')
                                        Nama perusahaan tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">ALamat</label>
                                <input type="text" name="alamat" value="{{ old('alamat') }}"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    placeholder="Alamat perusahaan">
                                <div class="text-danger">
                                    @error('alamat')
                                        ALamat tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" value="{{ old('link') }}" class="form-control"
                                    placeholder="https://id.wikipedia.org">
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

        $("#Magang").addClass("active");

    </script>

@endsection