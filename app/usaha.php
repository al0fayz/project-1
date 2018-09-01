<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usaha extends Model
{
    protected $table = "usaha";
	protected $primaryKey = 'nik';
	public $timestamps = false;
	protected $fillable = ['nik','no_doc', 'tanggal', 'alamat_usaha', 'no_telp' , 'email', 'klasifikasi', 'tahun'];
	
	public function masyarakat(){
    	return $this->belongTo('App\masyarakat', 'id');
    }
}
