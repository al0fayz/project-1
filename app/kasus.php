<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
    protected $table = 'kasus';
	public $timestamps = false;
	protected $fillable = ['bulan', 'tahun', 'perjudian', 'pencurian', 'sexual', 'lain']; 
}
