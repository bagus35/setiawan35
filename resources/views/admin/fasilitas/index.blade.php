@extends('layout_admin.template')
@section('heading', 'Fasilitas')

@section('page')
<li class="breadcrumb-item active">Fasilitas</li>
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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Fasilitas
                            </button>
                            @foreach ($fasilitas as $data)
                            <form action="{{ route('fasilitas.destroy', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="#" class="btn btn-success btn-sm"><i class="nav-icon fas fa-edit"></i>
                                    &nbsp; Edit</a>
                                <button class="btn btn-danger btn-sm"><i class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                            </form>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Fasilitas 1</td>
                                    <td><img src="{{ Storage::url($data->gambar1) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fasilitas 2</td>
                                    <td> <img src="{{ Storage::url($data->gambar2) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fasilitas 3</td>
                                    <td> <img src="{{ Storage::url($data->gambar3) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Fasilitas 4</td>
                                    <td> <img src="{{ Storage::url($data->gambar4) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Fasilitas 5</td>
                                    <td> <img src="{{ Storage::url($data->gambar5) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Fasilitas 6</td>
                                    <td> <img src="{{ Storage::url($data->gambar6) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Fasilitas 7</td>
                                    <td> <img src="{{ Storage::url($data->gambar7) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>Fasilitas 8</td>
                                    <td> <img src="{{ Storage::url($data->gambar8) }}" width="80px" class="img-thumbnail"></td>
                                </tr>
                            </tbody>

                        @endforeach
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
<div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Fasilitas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="gambar1">Pilih File Gambar Fasilitas 1</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar1') is-invalid @enderror" name="gambar1">
                                    <label class="custom-file-label" for="gambar1">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar1')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar2">Pilih File Gambar Fasilitas 2</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar2') is-invalid @enderror" name="gambar2">
                                    <label class="custom-file-label" for="gambar2">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar2')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar3">Pilih File Gambar Fasilitas 3</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar3') is-invalid @enderror" name="gambar3">
                                    <label class="custom-file-label" for="gambar3">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar3')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar4">Pilih File Gambar Fasilitas 4</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar4') is-invalid @enderror" name="gambar4">
                                    <label class="custom-file-label" for="gambar4">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar4')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar5">Pilih File Gambar Fasilitas 5</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar5') is-invalid @enderror" name="gambar5">
                                    <label class="custom-file-label" for="gambar5">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar5')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar6">Pilih File Gambar Fasilitas 6</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar6') is-invalid @enderror" name="gambar6">
                                    <label class="custom-file-label" for="gambar6">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar6')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar7">Pilih File Gambar Fasilitas 7</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar7') is-invalid @enderror" name="gambar7">
                                    <label class="custom-file-label" for="gambar7">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar7')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gambar8">Pilih File Gambar Fasilitas 8</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('gambar8') is-invalid @enderror" name="gambar8">
                                    <label class="custom-file-label" for="gambar8">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('gambar8')
                                Gambar tidak boleh kosong.
                                @enderror
                            </div>
                        </div>



                    </div>
                    <!-- /.card-body -->
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
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
    $("#fasilitas").addClass("active");
</script>

@endsection
