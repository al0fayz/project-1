<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengaduan as pengaduan;
use App\Http\Requests;

class aducontroller extends Controller
{	
	public function index()
	{
	$adu = pengaduan::orderBy('id', 'asc')->paginate(10);
	$jumlah = pengaduan::count();
    return view('admin.halaman.adu.pesan', compact ('adu' ,'jumlah'));
	}
    public function adu()
	{
		return view('halaman.adu');
	}
	public function save(Request $request)
	{
	 $this->validate($request,[ 'tanggal' => 'required',
								'nik' => 'required',
								'isi' => 'required',
								'foto' => 'sometimes',
							],[

						'tanggal.required' => 'anda harus mengisinya dengan benar.',
						'nik.required' => 'anda harus mengisinya dengan benar.',
						'isi.required' => 'anda harus mengisinya dengan benar.',
					]);
			$input = $request->all();
			pengaduan::create($input);
			 return Redirect('home'); 
	}
	public function detail($id)
	{
		$adu = pengaduan::where('id', 'like', $id)->get();
		return view('admin.halaman.adu.show', compact('adu'));
	}
	public function hapus($id)
	{
		$adu = pengaduan::where('id','=',$id)->first();
		$adu->delete();
		return redirect('pesan');
	}
}
