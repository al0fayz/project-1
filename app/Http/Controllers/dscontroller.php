<?php

namespace App\Http\Controllers;
use Response;
use DB;
use PDF;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\masyarakat as masyarakat;
use App\dsUsaha as dsUsaha;
use App\AutoNumber;

class dscontroller extends Controller
{
    public function getNumber(){
	$table="domisili_usaha";
    $primary="nik";
    $prefix="DOC-XX-";
    $no_doc=AutoNumber::autonumber($table,$primary,$prefix);
    return $no_doc;
	}
	public function tambah()
	{
		return view('halaman.doc.dsusaha.doc');
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
								'nama_usaha' => 'required',
								'email' => 'required',
								'no_telp' => 'required',
								'penanggung_jawab' => 'required',
								'jenis_kegiatan' => 'required',
								'luas' => 'required',
								'luas_ruang' => 'required',
								'karyawan' => 'required',
								'status_bangunan' => 'required',
								'alamat_usaha' => 'required',
								'no_ijin' => 'required',
								'tanggal_ijin' => 'required',
								'notaris' => 'required',
								'tanggal_notaris' => 'required',
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
						'nama_usaha.required' => 'anda harus mengisinya dengan benar.',
						'email.required' => 'anda harus mengisinya dengan benar.',
						'no_telp.required' => 'anda harus mengisinya dengan benar.',
						'penanggung_jawab.required' => 'anda harus mengisinya dengan benar.',
						'jenis_kegiatan.required' => 'anda harus mengisinya dengan benar.',
						'luas.required' => 'anda harus mengisinya dengan benar.',
						'luas_ruang.required' => 'anda harus mengisinya dengan benar.',
						'karyawan.required' => 'anda harus mengisinya dengan benar.',
						'status_bangunan.required' => 'anda harus mengisinya dengan benar.',
						'alamat_usaha.required' => 'anda harus mengisinya dengan benar.',
						'no_ijin.required' => 'anda harus mengisinya dengan benar.',
						'tanggal_ijin.required' => 'anda harus mengisinya dengan benar.',
						'notaris.required' => 'anda harus mengisinya dengan benar.',
						'no_notaris.required' => 'anda harus mengisinya dengan benar.',
						'tanggal_notaris.required' => 'anda harus mengisinya dengan benar.',

					]);
			$input = $request->all();
			$masyarakat = masyarakat::create($input);
			$ds = new dsUsaha;
			$ds->nama_usaha = $request->input('nama_usaha');
			$ds->email = $request->input('email');
			$ds->no_telp = $request->input('no_telp');
			$ds->penanggung_jawab = $request->input('penanggung_jawab');
			$ds->jenis_kegiatan = $request->input('jenis_kegiatan');
			$ds->luas = $request->input('luas');
			$ds->tanggal = date('Y-m-d');
			$ds->no_doc = $this->getNumber();
			$ds->luas_ruang = $request->input('luas_ruang');
			$ds->karyawan = $request->input('karyawan');
			$ds->status_bangunan = $request->input('status_bangunan');
			$ds->alamat_usaha = $request->input('alamat_usaha');
			$ds->no_ijin = $request->input('no_ijin');
			$ds->tanggal_ijin = $request->input('tanggal_ijin');
			$ds->notaris = $request->input('notaris');
			$ds->no_notaris = $request->input('no_notaris');
			$ds->tanggal_notaris = $request->input('tanggal_notaris');
			$masyarakat->domisili_usaha()->save($ds);
			
			 return Redirect('dsusaha/'.$masyarakat->id.'/cetak');
	}
	public function getPdf($id)
    {
	
        $mas = masyarakat::select(DB::raw("nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, id"))
					->where('id' , 'like', $id)
					->get();
		
        $pdf = PDF::loadView('halaman.cetak.ds',compact('mas'))->setPaper('a4', 'potrait');

        return $pdf->stream();
    }
	public function dsudoc()
	{
	 $mas = masyarakat::select(DB::raw("id,nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, status, pekerjaan, alamat, masyarakat.nik"))
					->join('domisili_usaha', 'domisili_usaha.nik', '=', 'masyarakat.id')
					->orderBy(DB::raw("id"))
					->get(); 	
    return view('admin.dokumen.dsudoc', compact ('mas'));
	}
	public function hapus($id)
	{
		$mas = masyarakat::where('id','=',$id)->first();
		$mas->delete();
		$dsu = dsUsaha::where('nik','=',$id)->first();
		$dsu->delete();
		return redirect('dsudoc');
	}
}
