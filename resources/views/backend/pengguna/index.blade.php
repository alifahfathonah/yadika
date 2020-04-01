@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Data Pengguna</h4>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Privilage</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{$item->name}}</td>    
                                <td>{{$item->email}}</td>    
                                <td>
                                    @if ($item->auth == 2)
                                        Guru
                                    @elseif($item->auth == 3)
                                        Staf
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        Aktif
                                    @elseif($item->status == 0)
                                        Tidak Aktif
                                    @endif
                                </td>    
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-warning btn-sm">Hapus</a>
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