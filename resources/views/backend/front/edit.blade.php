@extends('layouts.backend')
@section('title','Edit')
@section('content')
<div class="col-lg-12 col-lx-12 col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">
                @if ($edit->kat == 'mading')
                    Edit Mading Sekolah
                @elseif($edit->kat == "info")
                    Edit Informasi Sekolah
                @endif
            </h4>
            <form action="{{url('front-update', $edit->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                   @if ($edit->kat == 'about')
                   <div class="col-lg-12 col-xl-12 col-12">
                        <div class="form-group">
                            <label>Isi :</label>
                            <textarea name="isi" id="summernote-editor" class="form-control" required> {{$edit->isi}} </textarea>
                        </div>
                    </div>
                   @else
                   <div class="col-lg-6 col-xl-6 col-12">
                        <div class="form-group">
                            <label>Isi :</label>
                            <textarea name="isi" class="form-control" rows="4" placeholder="Tulis Disini..." required> {{$edit->isi}} </textarea>
                        </div>
                    </div>
                   @endif
                   @if ($edit->info == !null)
                   <div class="col-lg-6 col-xl-6 col-12">
                        <div class="form-group">
                            <label>Info Lebih Lanjut :</label>
                            <input type="text" name="info" class="form-control" value="{{$edit->info}}" placeholder="Optional">
                        </div>
                    </div>
                    @endif
                   <input type="hidden" name="kat" class="form-control" value="{{$edit->kat}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                <button type="reset" class="btn btn-warning btn-sm">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection