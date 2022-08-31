@extends('layout_admin.template')
@section('heading', 'Teknisi')

@section('page')
    <li class="breadcrumb-item active">Teknisi</li>
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
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Teknisi
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th>Gambar</th>
                                        <th width="20%">Nama Teknisi</th>
                                        <th width="40%">Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teknisi as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="{{ Storage::url($data->gambar) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $data->nama_teknisi }}</td>
                                            <td>{{ $data->jabatan }}</td>
                                            </td>
                                            <td>
                                                <form action="{{ route('teknisi.destroy', $data->id_teknisi) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('banner.edit', Crypt::encrypt($data->id_teknisi)) }}"
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
                    <h4 class="modal-title">Tambah Data Teknisi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('teknisi.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
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
                                <label for="nama">Nama Teknisi</label>
                                <input type="text" name="nama" value="{{ old('nama') }}"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    placeholder="Ramson Rajagukguk, A.Md">
                                <div class="text-danger">
                                    @error('nama')
                                        Nama tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="link">Jabatan</label>
                                <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                                    <option value="">-- Pilih Jabatan --</option>
                                    <option value="direktur" @if (old('jabatan') == 'direktur') {{ 'selected' }} @endif>
                                        Direktur</option>
                                        <option value="Kepala Jurusan TI">Kepala Jurusan TI</option>
                                    <option value="Kaprodi TRPL">Kaprodi TRPL</option>
                                    <option value="Kaprodi Teknik Rekayasa Komputer">Kaprodi Teknik Rekayasa Komputer</option>
                                    <option value="Kaprodi Bisnis Digital">Kaprodi Bisnis Digital</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Teknisi">Teknisi</option>
                                </select>
                                <div class="text-danger">
                                    @error('jabatan')
                                        Jabatan tidak boleh kosong.
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

        $("#Teknisi").addClass("active");
    </script>

@endsection
