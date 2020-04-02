<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = 
    [
        'nama','tempat_lahir','tgl_lahir','alamat','asal_sekolah','jenis_kelamin','agama','nama_ayah','nama_ibu','pekerjaan_ibu','pekerjaan_ayah','no_hp','no_hp_ortu','jurusan','info','status','email_murid'
    ];
}
