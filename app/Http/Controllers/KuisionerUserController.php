<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisionerUserController extends Controller
{
    public function index()
    {
        return view('user.kuisioner.index');
    }
}
