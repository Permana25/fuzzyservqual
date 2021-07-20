<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AnswerAdminController extends Controller
{
    public function index()
    {
        $pertanyaan= DB ::table('pertanyaan')->paginate(10);
        return view('/admin.answer.index',['pertanyaan'=>$pertanyaan]);
    }
   
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('pertanyaan')->where('id_pertanyaan',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/answer');
    }
    public function tambah(){
        
        return view ('/admin/answer/tambah');
    }
    public function store(Request $request)
    {
        DB::table('pertanyaan')->insert([
            'nama_pertanyaan' => $request->nama_pertanyaan,
            'id_kategori'=> $request->id_kategori
        ]);
        return redirect ('/admin/answer');
    }
    public function edit(Request $request)
    {
        $tentang = DB::table('pertanyaan')->where('id_pertanyaan',$request->id_pertanyaan)->get();
        return view('admin/answer/edit',['a' => $pertanyaan]);
    }
    public function update(Request $request)
{
	
	DB::table('pertanyaan')->where('id_pertanyaan',$request->id_pertanyaan)->update([
        'nama_pertanyaan' => $request->nama_pertanyaan,
        'id_kategori'=> $request->id_kategori
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/answer');
}
}
