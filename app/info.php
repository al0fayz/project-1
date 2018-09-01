<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    protected $table = 'info';
	public $timestamps = false;
	protected $fillable = ['tanggal', 'tentang', 'isi', 'foto']; 
}
