<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dsUsaha extends Model
{
    protected $table = "domisili_usaha";
	protected $primaryKey = 'nik';
	public $timestamps = false;
	protected $fillable = ['nik','nama_usaha', 'no_doc', 'penanggung_jawab', 'jenis_kegiatan', 'no_telp' , 'email', 'luas', 'luas_ruang', 'karyawan', 'status_bangunan', 'alamat_usaha', 'no_ijin', 'tanggal_ijin', 'notaris', 'no_notaris', 'tanggal_notaris', 'tanggal'];
	
	public function masyarakat(){
    	return $this->belongTo('App\masyarakat', 'id');
    }
}
