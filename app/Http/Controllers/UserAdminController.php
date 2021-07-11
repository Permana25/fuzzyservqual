<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use Hash;

class UserAdminController extends Controller
{
    public function index(){
        $mahasiswa= DB ::table('mahasiswa')->paginate(10);
        // return view('/admin.about.index',['about'=>$mahasiswa]);
        return view('admin.user.index',['mahasiswa'=>$mahasiswa]);
    }
    public function tambah(){
        
        return view ('/admin/user/tambah');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        DB::table('mahasiswa')->insert([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'id_role'=> $request->id_role,
            'password'=> $request->password,
            // $password = Hash::make('password'),
        ]);
        return redirect ('/user');
    }
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('mahasiswa')->where('id_mahasiswa',$id)->delete();
            
        // alihkan halaman ke halaman 
        return redirect('/user');
    }
    public function edit(Request $request)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id_mahasiswa',$request->id_mahasiswa)->get();
        return view('admin/user/edit',['b' => $mahasiswa]);
    }
    public function update(Request $request)
{
	// update data pegawai
	DB::table('mahasiswa')->where('id_mahasiswa',$request->id_mahasiswa)->update([
		'name' => $request->name,
        'nim' => $request->nim,
        'password' => $request->password,
        'id_role' =>$request->id_role
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/user');
}
}
