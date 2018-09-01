<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\info as info;
use App\pegawai as pegawai;
use App\desa as desa;
use App\Http\Requests;

class pagecontroller extends Controller
{
    //
	public function home()
	{
		$data = info::orderBy('id', 'desc')->paginate(4);
		return view('halaman.home', compact ('data'));
	}
	public function detail($id)
	{	
		
		$info = info::where('id', 'like', $id)->get();
		return view('halaman.detail', compact('info'));
	}
	public function data()
	{
		$data = pegawai::orderBy('id', 'desc')->paginate(20);
		return view('halaman.pegawai', compact ('data'));
	}
	public function desa()
	{
		$desa = desa::orderBy('id', 'desc')->paginate(2);
		return view('halaman.desa', compact ('desa'));
	}
	public function chart()
	{
		return view('halaman.chart');
	}
	public function cha()
	{
		return view('admin.chart.chart');
	}
	public function domisili()
	{
		return view('halaman.doc.domisili.doc');
	}
	public function usaha()
	{
		return view('halaman.doc.usaha.doc');
	}
	
}
