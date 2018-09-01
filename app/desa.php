<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    protected $table = 'desa';
	public $timestamps = false;
	protected $fillable = ['nama_desa', 'alamat', 'no_telp', 'kode_pos', 'icon']; 
}
