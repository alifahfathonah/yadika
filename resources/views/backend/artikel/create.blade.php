@extends('layouts.backend')
@section('title','Buat Artikel')
@section('content')
<style type="text/css">
    .cards {
        background-color: slategray;
    }
</style>
<div class="row">
    <div class="col-lg-9 col-lx-9 col-12 mt-3">
        <div class="card">
            <div class="card-body cards rounded">
                <h4 class="card-header mt-0 mb-1 rounded font-weight-bold">Artikel Post</h4>
            <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control mt-2 mb-2" placeholder="Judul Artikel" required>
                <textarea name="isi" id="summernote-editor" class="form-control" minlength="4" required> </textarea>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-xl-3 col-12 mt-3">
        <div class="card">
            <div class="card-body rounded">
               <div class="form-group">
                   <label>Kategori</label>
                   <select name="" class="form-control">
                       <option value="">Pilih</option>
                       <option value="">Berita</option>
                   </select>
               </div>
               <div class="form-group">
                    <label>Thumbail</label>
                    <input type="file" name="thumbail" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="" class="form-control">
                        <option value="">Pilih</option>
                        <option value="">Terbitkan</option>
                        <option value="">Draft</option>
                    </select>
                </div>
                <div class="form-group text-center">
                   <button type="submit" class="btn btn-primary">Tambah</button>
                   <a href="" class="btn btn-warning">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection