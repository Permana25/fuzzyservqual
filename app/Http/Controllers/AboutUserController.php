<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUserController extends Controller
{
    public function index()
    {
        return view('user.about.index');
    }
}
