<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kasus as kasus;
use App\pendidikan as pendidikan;
use App\jumlah as jumlah;
use App\Http\Requests;

class kasuscontroller extends Controller
{
    public function index()
	{
	$kasus = kasus::all();
	$bulan = $kasus->lists('bulan');
	$perjudian = $kasus->lists('perjudian');
	$pencurian = $kasus->lists('pencurian');
	$sexual = $kasus->lists('sexual');
	$lain = $kasus->lists('lain');
	
	$pend = pendidikan::all();
	$sd = $pend->lists('sd');
	$smp = $pend->lists('smp');
	$sma = $pend->lists('sma');
	$d3 = $pend->lists('d3');
	$s1 = $pend->lists('s1');
	$la = $pend->lists('lain');
	
	$jml = jumlah::orderBy('tahun', 'asc');
	$tahun = $jml->lists('tahun');
	$laki = $jml->lists('laki');
	$perempuan = $jml->lists('perempuan');
	
	return view('halaman.chart')
		->with('bulan',json_encode($bulan,JSON_NUMERIC_CHECK))
		->with('perjudian',json_encode($perjudian,JSON_NUMERIC_CHECK))
		->with('pencurian',json_encode($pencurian,JSON_NUMERIC_CHECK))
		->with('sexual',json_encode($sexual,JSON_NUMERIC_CHECK))
		->with('lain',json_encode($lain,JSON_NUMERIC_CHECK))
		->with('sd',json_encode($sd,JSON_NUMERIC_CHECK))
		->with('smp',json_encode($smp,JSON_NUMERIC_CHECK))
		->with('sma',json_encode($sma,JSON_NUMERIC_CHECK))
		->with('d3',json_encode($d3,JSON_NUMERIC_CHECK))
		->with('s1',json_encode($s1,JSON_NUMERIC_CHECK))
		->with('la',json_encode($la,JSON_NUMERIC_CHECK))
		->with('tahun',json_encode($tahun,JSON_NUMERIC_CHECK))
		->with('laki',json_encode($laki,JSON_NUMERIC_CHECK))
		->with('perempuan',json_encode($perempuan,JSON_NUMERIC_CHECK));
	}
	public function chart()
	{
	$kasus = kasus::all();
	$bulan = $kasus->lists('bulan');
	$perjudian = $kasus->lists('perjudian');
	$pencurian = $kasus->lists('pencurian');
	$sexual = $kasus->lists('sexual');
	$lain = $kasus->lists('lain');
	
	$pend = pendidikan::all();
	$sd = $pend->lists('sd');
	$smp = $pend->lists('smp');
	$sma = $pend->lists('sma');
	$d3 = $pend->lists('d3');
	$s1 = $pend->lists('s1');
	$la = $pend->lists('lain');
	
	$jml = jumlah::orderBy('tahun', 'asc');
	$tahun = $jml->lists('tahun');
	$laki = $jml->lists('laki');
	$perempuan = $jml->lists('perempuan');
	
	return view('admin.chart.chart')
		->with('bulan',json_encode($bulan,JSON_NUMERIC_CHECK))
		->with('perjudian',json_encode($perjudian,JSON_NUMERIC_CHECK))
		->with('pencurian',json_encode($pencurian,JSON_NUMERIC_CHECK))
		->with('sexual',json_encode($sexual,JSON_NUMERIC_CHECK))
		->with('lain',json_encode($lain,JSON_NUMERIC_CHECK))
		->with('sd',json_encode($sd,JSON_NUMERIC_CHECK))
		->with('smp',json_encode($smp,JSON_NUMERIC_CHECK))
		->with('sma',json_encode($sma,JSON_NUMERIC_CHECK))
		->with('d3',json_encode($d3,JSON_NUMERIC_CHECK))
		->with('s1',json_encode($s1,JSON_NUMERIC_CHECK))
		->with('la',json_encode($la,JSON_NUMERIC_CHECK))
		->with('tahun',json_encode($tahun,JSON_NUMERIC_CHECK))
		->with('laki',json_encode($laki,JSON_NUMERIC_CHECK))
		->with('perempuan',json_encode($perempuan,JSON_NUMERIC_CHECK));
	}
}
