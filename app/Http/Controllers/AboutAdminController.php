<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index()
    {
        $tentang= DB ::table('tentang')->paginate(10);
        return view('/admin.about.index',['tentang'=>$tentang]);
    }
   
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('tentang')->where('id_tentang',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/about');
    }
    public function tambah(){
        
        return view ('/admin/about/tambah');
    }
    public function store(Request $request)
    {
        DB::table('tentang')->insert([
            'judul' => $request->judul,
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect ('/admin/about');
    }
    public function edit(Request $request)
    {
        $tentang = DB::table('tentang')->where('id_tentang',$request->id_tentang)->get();
        return view('admin/about/edit',['a' => $tentang]);
    }
    public function update(Request $request)
{
	DB::table('tentang')->where('id_tentang',$request->id_tentang)->update([
        'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
	]);
	return redirect('/admin/about');
}
}
