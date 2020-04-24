@extends('layouts.backend')
@section('title','Status Page/URL')
@section('content')
<div class="row">
    <div class="col-lg-6 col-xl-6 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Pengaturan Slider</h4>
                <table id="myTable" class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Status / Page</th>
                            <th>Status</th>
                            <th width="110px">Action</th>
                        </tr>
                    </thead>
                        <?php $no=1; ?>
                        @foreach ($status as $item)
                            <tr>
                                <td> {{$no}} </td>
                                <td>{{$item->nama}}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <label class="badge badge-primary">Aktif</label>
                                    @else
                                    <label class="badge badge-danger">Tidak Aktif</label>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit Status</a>
                                </td>
                            </tr>
                        <?php $no++; ?>
                        @endforeach
                    <tbody>
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-6 col-lg-6 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Status Pages</h4>
                <form action="{{url('pengaturan-status')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama">Nama Pages</label>
                                <select name="nama" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Pendaftaran Online">Pendaftaran Online</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
    
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>
@endsection