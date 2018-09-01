<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info as info;
use App\Http\Requests;

class infocontroller extends Controller
{
    public function index()
	{
	$info = info::orderBy('id', 'asc')->paginate(10);
	$jumlah = info::count();
    return view('admin.halaman.info.info', compact ('info' ,'jumlah'));
	}
	public function tambah()
	{
		return view('admin.halaman.info.tambah');
	}
	public function save(Request $request)
	{
	 $this->validate($request,[ 'tanggal' => 'required',
								'tentang' => 'required',
								'isi' => 'required',
								'foto' => 'sometimes',
							],[

						'tanggal.required' => 'anda harus mengisinya dengan benar.',
						'tentang.required' => 'anda harus mengisinya dengan benar.',
						'isi.required' => 'anda harus mengisinya dengan benar.',
					]);
			$input = $request->all();
			info::create($input);
			 return Redirect('info'); 
}	
	public function detail($id)
	{
		$info = info::where('id', 'like', $id)->get();
		return view('admin.halaman.info.show', compact('info'));
	}
	public function hapus($id)
	{
		$info = info::where('id','=',$id)->first();
		$info->delete();
		return redirect('info');
	}
}
