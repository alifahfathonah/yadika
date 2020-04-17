@extends('layouts.backend')
@section('title','Pengaturan Slider')
@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Pengaturan Slider</h4>
                <table id="myTable" class="table table-responsive">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title Gambar</th>
                            <th>Sub Title Gambar</th>
                            <th>Satatus</th>
                            <th>Gambar</th>
                            <th width="110px">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no=1;
                        ?>
                       @foreach ($slider as $item)
                           <tr>
                               <td>{{$no}}</td>
                               <td>{{$item->title}}</td>
                               <td>{{$item->sub_title}}</td>
                               <td>{{$item->status}}</td>
                               <td><a href="" class="btn btn-info btn-sm">Lihat</a></td>
                               <td>
                                   <a href="" class="btn btn-warning btn-sm">Edit</a>
                                   <a href="" class="btn btn-danger btn-sm">Hapus</a>
                               </td>
                           </tr>
                        <?php
                            $no++;
                        ?>
                       @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-12 col-lg-12 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Tambah Gambar Slider</h4>
                <form action="{{url('pengaturan-slider')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-12">
                            <div class="form-group">
                                <label for="Title Gambar">Title Gambar</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title Gambar" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-12">
                            <div class="form-group">
                                <label for="Sub Title">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" placeholder="Enter Sub Title" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-12">
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 col-12">
                            <div class="form-group">
                                <label for="Gambar">Gambar</label>
                                <input type="file" class="form-control" name="gambar"required>
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