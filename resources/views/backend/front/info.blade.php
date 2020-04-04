@extends('layouts.backend')
@section('content')

<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">Informasi Sekolah</h4>
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Isi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                    ?>
                    @foreach ($isi as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{!!$item->isi!!}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-12 col-lx-12 col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">Informasi Sekolah</h4>
        <form action="{{url('front-store')}}" method="POST">
            @csrf
            <textarea name="isi" id="summernote-editor" class="form-control" minlength="4">Tulis Disini... </textarea>
            <input type="hidden" name="kat" value="info">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
        </form>
        </div>
    </div>
</div>
@endsection