<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryAdminController extends Controller
{
    public function index(){
        return view('admin.history.index');
    }
}
