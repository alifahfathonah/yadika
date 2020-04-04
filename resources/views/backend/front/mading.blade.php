@extends('layouts.backend')
@section('content')

<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 mb-1">Mading Sekolah</h4>
            <table id="myTable" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Isi</th>
                        <th>Info</th>
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
                            <td>{{$item->info}}</td>
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
            <h4 class="header-title mt-0 mb-1">Mading Sekolah</h4>
        <form action="{{url('front-store')}}" method="POST">
            @csrf
           <div class="row">
               <div class="col-lg-6 col-xl-6 col-12">
                    <div class="form-group">
                        <label>Isi :</label>
                        <textarea name="isi" class="form-control" rows="4" placeholder="Tulis Disini..." required> </textarea>
                    </div>
               </div>
               <div class="col-lg-6 col-xl-6 col-12">
                    <div class="form-group">
                        <label>Info Lebih Lanjut :</label>
                        <input type="text" name="info" class="form-control" required>
                    </div>
               </div>
           </div>
            
            <input type="hidden" name="kat" value="mading">
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="reset" class="btn btn-warning btn-sm">Reset</button>
        </form>
        </div>
    </div>
</div>
@endsection