@extends('layouts.backend')
@section('content')
<div class="col-xl-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="mb-3 header-title mt-0">Tambah Pengguna Baru</h4>
            <form action="{{route('pengguna.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Nama" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
                        <div class="form-group">
                            <label for="privilage">Privilage</label>
                            <select name="auth" class="form-control" required>
                                <option value="">-- Privilage --</option>
                                <option value="2">Guru</option>
                                <option value="3">Staf</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12">
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
@endsection