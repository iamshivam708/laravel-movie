<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $email = $request->get('email');
            $password = $request->get('password');
            $result = (new Admin)::where('email',$email)->where('password',$password)->get()->isEmpty();
            if($result == 1){
                return redirect()->to('/admin')->with('message','Wrong Login Credentials');
            }else{
                $request->session()->put('login','true');
                return redirect()->to('/admin/dashboard');
            }
        }
        $login = session('login');
        if($login == 'true'){
            return redirect()->to('/admin/dashboard');
        }else{
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('login');
        return redirect()->to('/admin');
    }
}
