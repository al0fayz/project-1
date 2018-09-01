<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domisili extends Model
{
    protected $table = "domisili";
	protected $primaryKey = 'nik';
	public $timestamps = false;
	protected $fillable = ['nik','no_doc', 'tanggal', 'alamat_domisili', 'no_telp' , 'email'];
	
	public function masyarakat(){
    	return $this->belongTo('App\masyarakat', 'id');
    }
}
