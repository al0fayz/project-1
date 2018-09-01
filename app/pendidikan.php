<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    protected $table = 'pendidikan';
	public $timestamps = false;
	protected $fillable = ['tahun', 'sd', 'smp', 'sma', 'd3','s1', 'lain']; 
}
