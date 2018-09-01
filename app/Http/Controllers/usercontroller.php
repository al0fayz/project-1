<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as User;
use App\Http\Requests;
use Validator;
use Session;

class usercontroller extends Controller
{
     public function index()
	{
	$user = user::orderBy('id', 'asc')->paginate(10);
	$jumlah = user::count();
    return view('admin.halaman.user.user', compact ('user' ,'jumlah'));
	}
	public function tambah()
	{
		return view('auth.register');
	}
	public function save(Request $request)
	{
	 $this->validate($request,[ 'username' => 'required|unique:User',
								'email' => 'required|email|unique:User',
								'password' => 'required',
								'nama' => 'required',
								'no_telp' => 'required',
								'level' => 'required',
								'foto' => 'sometimes',
							],[

						'username.required' => 'username harus disi.',
						'username.unique' => 'username sudah digunakan.',
						'password.required' => 'password harus diisi.',
						'nama.required' => 'nama lengkap harus diisi.',
						'no_telp.required' => ' tolong diisi.',
					]);
			$input = $request->all();
			/**
			$input['password'] = bcrypt($input['password']);
			User::create($input);*/
			
		
        $user->username = $request['username']; 
        $user->nama = $request['nama'];
		$user->password = bcrypt($request['password']);
		$user->email = $request['email']; 
        $user->no_telp = $request['no_telp'];
		$user->level = $request['username']; 
        $user->foto = $request['nama'];
			$user->save();
			 return Redirect('user'); 
		}
	public function detail($id)
	{
		$user = User::where('id', 'like', $id)->get();
		return view('admin.halaman.user.detail', compact('user'));
	}
	public function hapus($id)
	{
		$user = User::where('id','=',$id)->first();
		$user->delete();
		return redirect('user');
	}
}
