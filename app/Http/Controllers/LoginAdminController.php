<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Hash;
class LoginAdminController extends Controller
{
    public function login(Request $request){
        $username = $request->username;
        $password = Hash::make($request->password);
        
        // dd($password);
        $user = DB::table('users')->where('username', $username);
        // dd($user);

        if($user->count()){
            $user = $user->first();
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('userData', $user);
                return redirect('/dashboard');
            }else{
                return redirect('/admin/login');
            }
            
        }else{
            return redirect('/admin/login');
        }
        
    }

    public function logout(Request $request){

        $request->session()->flush();

        return redirect('/admin/login');
    }
}
