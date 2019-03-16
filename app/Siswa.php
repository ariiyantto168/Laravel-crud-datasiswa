<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_belakang','nama_depan','jenis_kelamin','agama','email','nomor_telepon','alamat','pesan'];
}
