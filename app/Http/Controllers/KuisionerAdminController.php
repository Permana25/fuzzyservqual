<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerAdminController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->join("kategori", "pertanyaan.id_kategori", "=", "kategori.id_kategori")->get();
        return view('admin.kuisioner.index',['pertanyaan' => $pertanyaan]);

    }
    public function hapus($id)
    {
        // DB ::table('about')->where('id_about','$id')->delete();
        // return redirect('/admin/about');

        DB::table('pertanyaan')->where('id_pertanyaan',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/kuisioner');
    }
    public function tambah()
    {
        $kategori= DB ::table('kategori')->paginate(10);
        return view ('/admin/kuisioner/tambah',['kategori'=>$kategori]);
    }
    public function store(Request $request)
    {
        DB::table('pertanyaan')->insert([
            'nama_pertanyaan' => $request->nama_pertanyaan,
            'id_kategori'=> $request->id_kategori
        ]);
        return redirect ('/admin/kuisioner');
    }
    public function edit(Request $request)
    {
        $kategori= DB ::table('kategori')->paginate(10);
        $pertanyaan = DB::table('pertanyaan')->where('id_pertanyaan',$request->id_pertanyaan)->get();
        // dd($pertanyaan);
        return view('admin/kuisioner/edit',['a' => $pertanyaan,'kategori'=>$kategori]);
    }
    public function update(Request $request)
    {
	
	DB::table('pertanyaan')->where('id_pertanyaan',$request->id_pertanyaan)->update([
        'nama_pertanyaan' => $request->nama_pertanyaan,
        'id_kategori'=> $request->id_kategori
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/kuisioner');
}
}

//     public function store(Request $request)
// {
// 	// insert data ke table pegawai
//     $id = DB::select('select * from pertanyaan ORDER BY id_pertanyaan DESC LIMIT 1');
//     $a = 1;
//     $idlast = $id;
// 	DB::table('pertanyaan')->insert([
// 		'id_pertanyaan' => $idlast,
// 		'pertanyaan' => $request->pertanyaan
// 	]);
// 	// alihkan halaman ke halaman pegawai
// 	return redirect('/admin/kuisioner');
 
// }

