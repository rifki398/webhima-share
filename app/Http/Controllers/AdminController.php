<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function admin() {
        return view('private/admin');
    }
    public function login(Request $request){
        $request->session()->flash('username', $request->username);
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Please input your username!',
            'password.required'=>'Please input your password!'
        ]);
        $info = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if(Auth::attempt($info)){
            return 'yeay';
        }else{
            return 'gagal';
        }
    }
}
