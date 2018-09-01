<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
    protected $table = "masyarakat";
	protected $primaryKey = 'id';
	public $timestamps = false;
	protected $fillable = ['nik','nama','tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama' , 'status' , 'pekerjaan', 'alamat'];
	
	public function domisili(){
		return $this->hasOne('App\domisili', 'nik');
	}
	public function usaha(){
		return $this->hasOne('App\usaha', 'nik');
	}
	public function ktp(){
		return $this->hasOne('App\ktp', 'nik');
	}
	public function domisili_usaha(){
		return $this->hasOne('App\dsUsaha', 'nik');
	}
}
