@extends('layout_admin.template')
@section('heading', 'Details event')

@section('page')
    <li class="breadcrumb-item active"><a href="{{ route('event.index') }}">event</a></li>
    <li class="breadcrumb-item active">Details event</li>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('event.index') }}" class="btn btn-default btn-sm"><i
                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
            </div>
            <div class="card-body">
                <div class="row no-gutters ml-2 mb-2 mr-2">
                    <div class="col-md-4">
                        <img src="{{ asset($event->gambar) }}" class="card-img img-details" alt="...">
                    </div>
                    <div class="col-md-1 mb-4"></div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Judul Event : </th>
                                    <td>{{ $event->judul_event }}</td>
                                </tr>
                                <tr>
                                    <th>Isi :</th>
                                    <td>{{ $event->isi }}</td>
                                </tr>
                                <tr>
                                    <th>Author :</th>
                                    <td>{{ $event->user_id }}</td>
                                </tr>
                                <tr>
                                    <th>Publish :</th>
                                    <td>{{ $event->publish }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#event").addClass("active");

    </script>
@endsection
