<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Http\Requests;
use App\desa as desa;

class desacontroller extends Controller
{
    public function index()
	{
	$desa = desa::orderBy('id', 'asc')->paginate(10);
	$jumlah = desa::count();
    return view('admin.halaman.desa.desa', compact ('desa' ,'jumlah'));
	}
	public function detail($id)
	{
		$desa = desa::where('id', 'like', $id)->get();
		return view('admin.halaman.desa.show', compact('desa'));
	}
	public function edit($id)
	{
		$desa = desa::where('id', 'like', $id)->get();
		return view('admin.halaman.desa.edit', compact('desa'));
	}
	public function update($id, Request $request)
	{		$input = $request->all();
			$this->validate($request,[ 'nama_desa' => 'required',
								'alamat' => 'required',
								'no_telp' => 'required',
								'kode_pos' => 'required',
								'icon' => 'sometimes',
							],[

						'nama_desa.required' => 'nama desa masih kosong.',
						'alamat.required' => ' tolong diisi.',
						'no_telp.required' => ' tolong diisi.',
						'kode_pos.required' => ' tolong diisi.',
					]);
			$desa = desa::where('id','=',$id)->first();
			$desa->nama_desa = $input['nama_desa'];
			$desa->alamat = $input['alamat'];
			$desa->no_telp = $input['no_telp'];
			$desa->kode_pos = $input['kode_pos'];
			$desa->icon = $input['icon'];
			$desa->save();
			 return Redirect('desa'); 
	}
	public function getPdf()
    {
        $desa = desa::all();

        $pdf = PDF::loadView('admin.cetak.desa',compact('desa'));

        return $pdf->stream();
    }
}
