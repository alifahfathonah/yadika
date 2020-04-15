@extends('layouts.backend')
@section('title','Artikel')
@section('content')
<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Data Artikel
                    <a href="{{route('artikel.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                </h4>
                <table id="myTable" class="table table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Kategori</th>
                            <th>Tgl Dibuat</th>
                            <th>Tgl Terbit</th>
                            <th>Terakhir Update</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($artikel as $item)
                            <tr>
                                <td>{{$no}}</td>
                                <td><a href="{{$item->slug}}">{{$item->title}}</a></td>
                                <td>Berita</td>
                                <td>{{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                                <td>{{Carbon\carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                                <td>{{Carbon\carbon::parse($item->updated_at)->format('d-m-Y')}}</td>
                                <td>Terbit</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php $no++; ?>    
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection