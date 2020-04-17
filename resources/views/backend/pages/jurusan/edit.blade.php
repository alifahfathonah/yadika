@extends('layouts.backend')
@section('content')
<div class="col-lg-12 col-lx-12 col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">
                @if ($edit->pages == 'tkj')
                Edit Pages Teknik Komputer & Jaringan
                @elseif($edit->pages == 'tkr')
                Edit PPages Teknik Otomotif
                @elseif($edit->pages == 'ap')
                Edit Pages Administrasi Perkantoran
                @elseif($edit->pages == 'ak')
                Edit Pages Akuntansi
                @elseif($edit->pages == 'ro')
                Edit Pages Pendaftaran Online
                @elseif($edit->pages == 'history')
                Edit Pages Sejarah Yadika
                @elseif($edit->pages == 'head')
                Edit Pages Kepala Sekolah
                @elseif($edit->pages == 'visi_misi')
                Edit Pages Visi dan Misi
                @endif
            </h4>
        <form action="{{url('pages-update', $edit->id)}}" method="POST">
            @csrf
            @method('PUT')
            <textarea name="isi" id="summernote-editor" class="form-control">{{$edit->isi}}</textarea>
            <input type="hidden" name="pages" value="{{$edit->pages}}">
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
        </form>
        </div>
    </div>
</div>
@endsection