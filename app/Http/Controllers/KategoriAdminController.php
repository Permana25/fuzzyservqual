<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class KategoriAdminController extends Controller
{
    public function index()
        {
            $kategori= DB ::table('kategori')->paginate(10);
            return view('/admin.kategori.index',['kategori'=>$kategori]);
        }
       
        public function hapus($id)
        {
            // DB ::table('about')->where('id_about','$id')->delete();
            // return redirect('/admin/about');
    
            DB::table('kategori')->where('id_kategori',$id)->delete();
                
            // alihkan halaman 
            return redirect('/kategori');
        }
        public function tambah(){
            
            return view ('/admin/kategori/tambah');
        }
        public function store(Request $request)
        {
            DB::table('kategori')->insert([
                'nama_kategori' => $request->nama_kategori,
                'deskripsi'=> $request->deskripsi,
            ]);
            return redirect ('/kategori');
        }
        public function edit(Request $request)
        {
            $kategori = DB::table('kategori')->where('id_kategori',$request->id_kategori)->get();
            return view('admin/kategori/edit',['a' => $kategori]);
        }
        public function update(Request $request)
    {
        // update data pegawai
        DB::table('kategori')->where('id_kategori',$request->id_kategori)->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi'=> $request->deskripsi,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kategori');
    }

}
