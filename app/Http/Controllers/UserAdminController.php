<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use App\Pengguna;

class UserAdminController extends Controller
{
    public function index(){
        $pengguna= DB ::table('pengguna')->paginate(10);
        // return view('/admin.about.index',['about'=>$mahasiswa]);
        return view('admin.user.index',['pengguna'=>$pengguna]);
    }
    public function tambah(){
        
        return view ('/admin/user/tambah');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $pengguna = new Pengguna();
        $pengguna->nim = $request->nim;
        $pengguna->nama = $request->nama;
        $pengguna->password = Hash::make($request->password, [
            'rounds' => 12
        ]);
        $pengguna->save();
        // DB::table('pengguna')->insert([
        //     'nim'=> $request->nim,
        //     'nama'=> $request->nama,
        //     // 'password'=> $request->password,
        //     'password' => Hash::make($request->password, [
        //         'rounds' => 12
        //     ]);
        //     // $password = Hash::make('password'),
        // ]);
        return redirect ('/user');
    }
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('pengguna')->where('id_pengguna',$id)->delete();
            
        // alihkan halaman ke halaman 
        return redirect('/user');
    }
    public function edit(Request $request)
    {
        $pengguna = DB::table('pengguna')->where('id_pengguna',$request->id_pengguna)->get();
        return view('admin/user/edit',['p' => $pengguna]);
    }
    public function update(Request $request)
{
	// update data pegawai
	DB::table('pengguna')->where('id_pengguna',$request->id_pengguna)->update([
		'nim' => $request->nim,
        'nama' => $request->nama,
        'password' => $request->password,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/user');
}
}
