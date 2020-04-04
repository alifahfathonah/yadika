@extends('layouts.backend')
@section('content')

@if ($cek == !null)
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">Pages Teknik Komputer & Jaringan</h4>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Isi</th>
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
@else
    <div class="col-lg-12 col-lx-12 col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Pages Teknik Komputer & Jaringan</h4>
            <form action="{{url('page-store')}}" method="POST">
                @csrf
                <textarea name="isi" id="summernote-editor" class="form-control">Tulis Disini... </textarea>
                <input type="hidden" name="pages" value="tkj">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <button type="reset" class="btn btn-warning btn-sm">Reset</button>
            </form>
            </div>
        </div>
    </div>
@endif

@endsection