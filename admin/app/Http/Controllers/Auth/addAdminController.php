<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class addAdminController extends Controller
{
    //

    public function index(){
        return view('auth.addUserAdmin',['success' => '','bg-color' => '']);
    }

    public function add(Request $request){

        $valid = $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if(!$valid){
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'privilege' => $request->input('privilegeStatus'),
                'password' => bcrypt($request->input('password')),
            ]);

            return view('auth.addUserAdmin',['success' => 'Successfully User Added','bgColor' => 'green']);
        }else{
            return view('Auth.addUserAdmin',['success' => 'Error Adding User','bgColor' => 'red']);
        }

    }

}
