@extends('layouts.frontend')
@section('content')
    <div class="panel panel-forum">
        <div class="panel-heading">
            <h4 class="panel-title">Form Pendaftaran Online</h4>
        </div>
        
        <form action="{{url('pendaftaran-online')}}" method="POST">
            @csrf
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Enter Nama" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Alamat Lengkap</label>
                    <textarea name="alamat" class="form-control" rows="1" required></textarea>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Agama</label>
                    <select name="agama" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Nama Lengkap Ayah</label>
                    <input type="text" name="nama_ayah" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Nama Lengkap Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Nomor Handphone / WhatsApp </label>
                    <input type="number" name="no_hp" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Nomor Handphone / WhatsApp Orang Tua / Wali</label>
                    <input type="number" name="no_hp_ortu" class="form-control" required>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Jurusan</label>
                    <select name="jurusan" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-12" style="margin-top:5px">
                <div class="form-group">
                    <label for="nama">Mendapatkan Info Dari</label>
                    <select name="info" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Koran">Koran</option>
                        <option value="Teman">Teman</option>
                        <option value="dll">Lainnya</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="margin-left:15px">Daftar</button>
                <a href="/" class="btn btn-warning">Batal</a>
            </div>
        </form>
    </div>
@endsection