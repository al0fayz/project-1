<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    protected $table = "ktp";
	protected $primaryKey = 'nik';
	public $timestamps = false;
	protected $fillable = ['nik','no_kk', 'no_doc', 'tanggal', 'kewarganegaraan', 'no_telp' , 'email', 'ayah', 'ibu', 'foto'];
	
	public function masyarakat(){
    	return $this->belongTo('App\masyarakat', 'id');
    }
}
