<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use PDF;
use Validator;
use App\Http\Requests;
use App\masyarakat as masyarakat;
use App\domisili as domisili;
use App\usaha as usaha;
use App\AutoNumber;

class mascontroller extends Controller
{	

	public static function date()
	{
		date_default_timezone_set('Asia/jakarta');
		$date = date('dmy');
		return $date;
	}
	public function getNumber(){
	$table="domisili";
    $primary="nik";
    $prefix="DOC-";
    $no_doc=AutoNumber::autonumber($table,$primary,$prefix);
    return $no_doc;
	}
	public function getno(){
	$table="usaha";
    $primary="nik";
    $prefix="510.16/Doc/17-";
    $no_doc=AutoNumber::autonumber($table,$primary,$prefix);
    return $no_doc;
	}
    public function simpan(Request $request)
	{
	 $this->validate($request,[ 'nama' => 'required',
								'nik' => 'required',
								'tempat_lahir' => 'required',
								'tanggal_lahir' => 'required',
								'jenis_kelamin' => 'required',
								'agama' => 'required',
								'status' => 'required',
								'pekerjaan' => 'required',
								'alamat' => 'required',
								'alamat_usaha' => 'required',
								'email' => 'required',
								'no_telp' => 'required',
								'klasifikasi' => 'required',
								'tahun' => 'required',
								
							],[

						'nama.required' => 'anda harus mengisinya dengan benar.',
						'nik.required' => 'anda harus mengisinya dengan benar.',
						'tempat_lahir.required' => 'anda harus mengisinya dengan benar.',
						'tanggal_lahir.required' => 'anda harus mengisinya dengan benar.',
						'jenis_kelamin.required' => 'anda harus mengisinya dengan benar.',
						'agama.required' => 'anda harus mengisinya dengan benar.',
						'status.required' => 'anda harus mengisinya dengan benar.',
						'pekerjaan.required' => 'anda harus mengisinya dengan benar.',
						'alamat.required' => 'anda harus mengisinya dengan benar.',
						'alamat_usaha.required' => 'anda harus mengisinya dengan benar.',
						'email.required' => 'anda harus mengisinya dengan benar.',
						'no_telp.required' => 'anda harus mengisinya dengan benar.',
						'klasifikasi.required' => 'anda harus mengisinya dengan benar.',
						'tahun.required' => 'anda harus mengisinya dengan benar.',
					]);
			$input = $request->all();
			$masyarakat = masyarakat::create($input);
			$usaha = new usaha;
			$usaha->alamat_usaha = $request->input('alamat_usaha');
			$usaha->email = $request->input('email');
			$usaha->no_telp = $request->input('no_telp');
			$usaha->klasifikasi = $request->input('klasifikasi');
			$usaha->tahun = $request->input('tahun');
			$usaha->tanggal = date('Y-m-d');
			$usaha->no_doc = $this->getno();
			$masyarakat->usaha()->save($usaha);
			
			 return Redirect('usaha/'.$masyarakat->id.'/cetak'); 
	}
	public function save(Request $request)
	{
	 $this->validate($request,[ 'nama' => 'required',
								'nik' => 'required',
								'tempat_lahir' => 'required',
								'tanggal_lahir' => 'required',
								'jenis_kelamin' => 'required',
								'agama' => 'required',
								'status' => 'required',
								'pekerjaan' => 'required',
								'alamat' => 'required',
								'alamat_domisili' => 'required',
								'email' => 'required',
								'no_telp' => 'required',
								
							],[

						'nama.required' => 'anda harus mengisinya dengan benar.',
						'nik.required' => 'anda harus mengisinya dengan benar.',
						'tempat_lahir.required' => 'anda harus mengisinya dengan benar.',
						'tanggal_lahir.required' => 'anda harus mengisinya dengan benar.',
						'jenis_kelamin.required' => 'anda harus mengisinya dengan benar.',
						'agama.required' => 'anda harus mengisinya dengan benar.',
						'status.required' => 'anda harus mengisinya dengan benar.',
						'pekerjaan.required' => 'anda harus mengisinya dengan benar.',
						'alamat.required' => 'anda harus mengisinya dengan benar.',
						'alamat_domisili.required' => 'anda harus mengisinya dengan benar.',
						'email.required' => 'anda harus mengisinya dengan benar.',
						'no_telp.required' => 'anda harus mengisinya dengan benar.',
					]);
			$input = $request->all();
			$masyarakat = masyarakat::create($input);
			$domisili = new domisili;
			$domisili->alamat_domisili = $request->input('alamat_domisili');
			$domisili->email = $request->input('email');
			$domisili->no_telp = $request->input('no_telp');
			$domisili->tanggal = date('Y-m-d');
			$domisili->no_doc = $this->getNumber();
			$masyarakat->domisili()->save($domisili);
			
			 return Redirect('domisili/'.$masyarakat->id.'/cetak');
	}
	public function getPdf($id)
    {
	
        $mas = masyarakat::select(DB::raw("nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, id"))
					->where('id' , 'like', $id)
					->get();
		
        $pdf = PDF::loadView('halaman.cetak.mas',compact('mas'))->setPaper('a4', 'potrait');

        return $pdf->stream();
    }
	public function cetak($id)
    {
	
        $mas = masyarakat::select(DB::raw("nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, id"))
					->where('id' , 'like', $id)
					->get();
		
        $pdf = PDF::loadView('halaman.cetak.usaha',compact('mas'))->setPaper('a4', 'potrait');

        return $pdf->stream();
    }
	public function dsdoc()
	{
	 $mas = masyarakat::select(DB::raw("id,nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, masyarakat.nik"))
					->join('domisili', 'domisili.nik', '=', 'masyarakat.id')
					->orderBy(DB::raw("id"))
					->get(); 	
    return view('admin.dokumen.do', compact ('mas'));
	}
	public function hapus($id)
	{
		$mas = masyarakat::where('id','=',$id)->first();
		$mas->delete();
		$ds = domisili::where('nik','=',$id)->first();
		$ds->delete();
		return redirect('do');
	}
	public function usdoc()
	{
	 $mas = masyarakat::select(DB::raw("id,nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, masyarakat.nik"))
					->join('usaha', 'usaha.nik', '=', 'masyarakat.id')
					->orderBy(DB::raw("id"))
					->get(); 	
    return view('admin.dokumen.us', compact ('mas'));
	}
	public function del($id)
	{
		$mas = masyarakat::where('id','=',$id)->first();
		$mas->delete();
		$us = usaha::where('nik','=',$id)->first();
		$us->delete();
		return redirect('us');
	}
}
