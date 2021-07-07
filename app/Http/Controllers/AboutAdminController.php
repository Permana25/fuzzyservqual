<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    public function index()
    {
        $about= DB ::table('about')->paginate(2);
        return view('/admin.about.index',['about'=>$about]);
    }
   
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('about')->where('id_about',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/about');
    }
    public function tambah(){
        
        return view ('/admin/about/tambah');
    }
    public function store(Request $request)
    {
        DB::table('about')->insert([
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect ('/admin/about');
    }
    public function edit(Request $request)
    {
        $about = DB::table('about')->where('id_about',$request->id_about)->get();
        return view('admin/about/edit',['a' => $about]);
    }
    public function update(Request $request)
{
	// update data pegawai
	DB::table('about')->where('id_about',$request->id_about)->update([
		'deskripsi' => $request->deskripsi
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/about');
}
}
