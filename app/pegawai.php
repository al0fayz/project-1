<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
	public $timestamps = false;
	protected $fillable = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'status', 'agama', 'jabatan', 'email', 'no_telp', 'foto', 'jenis_kelamin'];
}
