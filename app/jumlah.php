<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah extends Model
{
    protected $table = 'jumlah';
	public $timestamps = false;
	protected $fillable = ['laki', 'tahun', 'perempuan'];
}
