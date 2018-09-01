<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = 'pengaduan';
	public $timestamps = false;
	protected $fillable = ['tanggal','nik', 'isi', 'foto']; 
}
