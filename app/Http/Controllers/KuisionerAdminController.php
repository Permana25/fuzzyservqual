<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerAdminController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return view('admin.kuisioner.index',['pertanyaan' => $pertanyaan]);

    }

    public function store(Request $request)
{
	// insert data ke table pegawai
    $id = DB::select('select * from pertanyaan ORDER BY id_pertanyaan DESC LIMIT 1');
    $a = 1;
    $idlast = $id;
	DB::table('pertanyaan')->insert([
		'id_pertanyaan' => $idlast,
		'pertanyaan' => $request->pertanyaan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/kuisioner');
 
}
}
