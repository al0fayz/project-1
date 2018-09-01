<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use PDF;
use Validator;
use App\Http\Requests;
use App\masyarakat as masyarakat;
use App\ktp as ktp;
use App\AutoNumber;

class ktpcontroller extends Controller
{
    public function getNumber(){
	$table="ktp";
    $primary="nik";
    $prefix="DOC-KTP-";
    $no_doc=AutoNumber::autonumber($table,$primary,$prefix);
    return $no_doc;
	}
	public function tambah()
	{
		return view('halaman.doc.ktp.doc');
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
								'no_kk' => 'required',
								'email' => 'required',
								'no_telp' => 'required',
								'ayah' => 'required',
								'ibu' => 'required',
								'kewarganegaraan' => 'required',
								'foto' => 'sometimes',
								
							],[

						'nama.required' => 'anda belum mengisi nama.',
						'nik.required' => 'anda belum mengisi nik.',
						'tempat_lahir.required' => 'anda belum mengisi tempat lahir anda.',
						'tanggal_lahir.required' => 'tanggal lahir masih kosong.',
						'jenis_kelamin.required' => 'anda harus mengisinya dengan benar.',
						'agama.required' => 'anda harus mengisinya dengan benar.',
						'status.required' => 'anda harus mengisinya dengan benar.',
						'pekerjaan.required' => 'anda harus mengisinya dengan benar.',
						'alamat.required' => 'anda harus mengisinya dengan benar.',
						'kewarganegaraan.required' => 'anda harus mengisinya dengan benar.',
						'email.required' => 'anda harus mengisinya dengan benar.',
						'no_telp.required' => 'anda harus mengisinya dengan benar.',
						'ayah.required' => 'anda harus mengisinya dengan benar.',
						'ibu.required' => 'anda harus mengisinya dengan benar.',
						'no_kk.required' => 'anda harus mengisinya dengan benar.',
					]);
			$input = $request->all();
			$masyarakat = masyarakat::create($input);
			$ktp = new ktp;
			$ktp->no_kk = $request->input('no_kk');
			$ktp->email = $request->input('email');
			$ktp->no_telp = $request->input('no_telp');
			$ktp->kewarganegaraan = $request->input('kewarganegaraan');
			$ktp->ayah = $request->input('ayah');
			$ktp->ibu = $request->input('ibu');
			$ktp->tanggal = date('Y-m-d');
			$ktp->no_doc = $this->getNumber();
			$ktp->foto = $request->input('foto');
			$masyarakat->ktp()->save($ktp);
			
			return Redirect('ktp/'.$masyarakat->id.'/cetak'); 
	}
	public function cetak($id)
    {
	
        $mas = masyarakat::select(DB::raw("nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, id"))
					->where('id' , 'like', $id)
					->get();
		
        $pdf = PDF::loadView('halaman.cetak.ktp',compact('mas'))->setPaper('a4', 'potrait');

        return $pdf->stream();
    }
	public function ktpdoc()
	{
	 $mas = masyarakat::select(DB::raw("id,nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, masyarakat.nik"))
					->join('ktp', 'ktp.nik', '=', 'masyarakat.id')
					->orderBy(DB::raw("id"))
					->get(); 	
    return view('admin.dokumen.ktp', compact ('mas'));
	}
	public function hapus($id)
	{
		$mas = masyarakat::where('id','=',$id)->first();
		$mas->delete();
		$us = ktp::where('nik','=',$id)->first();
		$us->delete();
		return redirect('ktpdoc');
	}
}
