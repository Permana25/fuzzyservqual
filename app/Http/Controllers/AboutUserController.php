<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class AboutUserController extends Controller
{
    public function index()
    {
        $tentang = DB::table('tentang')->get();
        // dd($tentang);
        return view('user.about.index',['a' => $tentang]);
    }
}
