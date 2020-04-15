@extends('layouts.backend')
@section('title','Pendaftaran')
@section('content')
<div class="row mt-3">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Calon Siswa Baru</span>
                        <h2 class="mb-0">{{$siswa}}</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-primary" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Calon Siswi Baru</span>
                        <h2 class="mb-0">{{$siswi}}</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-info" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Sudah Validasi</span>
                        <h2 class="mb-0">{{$sudah}}</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-warning" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Belum Validasi</span>
                        <h2 class="mb-0">{{$belum}}</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-danger" data-feather="users"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Data Calon Murid</h4>
                <table id="myTable" class="table table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                            <th>Agama</th>
                            <th>Kontak</th>
                            <th>Jurusan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($new_murid as $item)
                            <tr>
                                <td><a href="">{{$item->nama}}</a></td>    
                                <td>{{$item->tempat_lahir}}, {{Carbon\carbon::parse($item->tgl_lahir)->format('d-m-Y')}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->jenis_kelamin}}</td>
                                <td>{{$item->agama}}</td>     
                                <td>{{$item->no_hp_ortu}}</td>    
                                <td>{{$item->jurusan}}</td> 
                                <td>
                                    @if ($item->status == "Belum")
                                        <label class="badge badge-danger">Belum Validasi</label>
                                    @else
                                        <label class="badge badge-success">Sudah Validasi</label>
                                    @endif
                                </td>
                                <td width="120px">
                                    @if ($item->status == 'Belum')
                                        <a data-id-validasi="{{$item->id}}" id="validasi" class="btn btn-primary btn-sm text-white">Validasi</a>
                                    @endif
                                    <a href="" class="btn btn-info btn-sm">Cetak</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        // Validasi Pendaftaran
            $(document).on('click','#validasi', function () {
                var id = $(this).attr('data-id-validasi');
                $.get(' {{Url("validasi-pendaftaran")}}', {'_token' : $('meta[name=csrf-token]').attr('content'),id:id}, function(resp){
                    location.reload();
                });
            });
    </script>
@endsection