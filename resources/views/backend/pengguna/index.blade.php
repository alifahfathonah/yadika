@extends('layouts.backend')
@section('title','Data Pengguna')
@section('content')
<div class="row">
    <div class="col-lg-6 col-xl-6 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Data Pengguna</h4>
                <table id="myTable" class="table table-responsive nowrap">
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

    <div class="col-lg-6 col-xl-6 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Tambah Pengguna Baru</h4>
                <form action="{{route('pengguna.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Nama" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="form-group">
                                <label for="privilage">Privilage</label>
                                <select name="auth" class="form-control" required>
                                    <option value="">-- Privilage --</option>
                                    <option value="2">Guru</option>
                                    <option value="3">Staf</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12 col-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
    
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>
@endsection