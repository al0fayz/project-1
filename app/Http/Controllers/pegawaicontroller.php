<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;
use App\pegawai;

class pegawaicontroller extends Controller
{
    public function index()
	{
	$pegawai = pegawai::orderBy('id', 'asc')->paginate(10);
	$jumlah = pegawai::count();
    return view('admin.halaman.pegawai.pegawai', compact ('pegawai' ,'jumlah'));
	}
	public function tambah()
	{
		return view('admin.halaman.pegawai.tambah');
	}
	public function detail($id)
	{
		$pegawai = pegawai::where('id', 'like', $id)->get();
		return view('admin.halaman.pegawai.show', compact('pegawai'));
	}
	public function save(Request $request)
	{
	 $this->validate($request,[ 'nik' => 'required|unique:pegawai',
								'nama' => 'required',
								'tempat_lahir' => 'required',
								'jenis_kelamin' => 'required',
								'agama' => 'required',
								'status' => 'required',
								'jabatan' => 'required',
								'email' => 'required|email|unique:pegawai',
								'no_telp' => 'required',
								'foto' => 'sometimes',
							],[

						'nik.required' => 'tolong diisi.',
						'nik.unique' => 'nik sudah digunakan.',
						'nama.required' => ' nama belum diisi',
						'jenis_kelamin.required' => ' tolong diisi.',
						'agama.required' => ' tolong diisi.',
						'status.required' => ' tolong diisi.',
						'jabatan.required' => ' tolong diisi.',
						'no_telp.required' => ' tolong diisi.',
					]);
			$input = $request->all();
			pegawai::create($input);
			 return Redirect('pegawai'); 
}	
	public function edit($id)
	{
		$pegawai = pegawai::where('id', 'like', $id)->get();
		return view('admin.halaman.pegawai.edit', compact('pegawai'));
	}
	public function hapus($id)
	{
		$pegawai = pegawai::where('id','=',$id)->first();
		$pegawai->delete();
		return redirect('pegawai');
	}
	public function update($id, Request $request)
	{		$input = $request->all();
			$this->validate($request,[ 'nik' => 'required',
								'nama' => 'required',
								'tempat_lahir' => 'required',
								'jenis_kelamin' => 'required',
								'agama' => 'required',
								'status' => 'required',
								'jabatan' => 'required',
								'email' => 'required',
								'no_telp' => 'required',
								'foto' => 'sometimes',
							],[

						'nik.required' => 'tolong diisi.',
						'nik.unique' => 'nik sudah digunakan.',
						'nama.required' => ' nama belum diisi',
						'jenis_kelamin.required' => ' tolong diisi.',
						'agama.required' => ' tolong diisi.',
						'status.required' => ' tolong diisi.',
						'jabatan.required' => ' tolong diisi.',
						'no_telp.required' => ' tolong diisi.',
					]);
			$pegawai = pegawai::where('id','=',$id)->first();
			$pegawai->nik = $input['nik'];
			$pegawai->nama = $input['nama'];
			$pegawai->tempat_lahir = $input['tempat_lahir'];
			$pegawai->tanggal_lahir = $input['tanggal_lahir'];
			$pegawai->jenis_kelamin = $input['jenis_kelamin'];
			$pegawai->agama = $input['agama'];
			$pegawai->status = $input['status'];
			$pegawai->jabatan = $input['jabatan'];
			$pegawai->email = $input['email'];
			$pegawai->no_telp = $input['no_telp'];
			$pegawai->foto = $input['foto'];
			$pegawai->save();
			 return Redirect('pegawai'); 
	}
	public function getPdf()
    {
        $pegawai = pegawai::all();

        $pdf = PDF::loadView('admin.cetak.cetak',compact('pegawai'));

        return $pdf->stream();
    }
}
