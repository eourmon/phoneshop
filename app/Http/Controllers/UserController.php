<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class UserController extends Controller
{
    public function user_login()
    {
        return view('login.login');
    }

    public function do_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = DB::table('tbluser')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if($user!=null){
            session(['user' => $user]);
            return redirect('/');
        }
        else{
            session()->flash('error', 'Invalid username or password!');
            return redirect()->route('user_login.index');
        }
    }
    public function logout(Request $r)
    {
        $r->session()->forget('user');
        $r->session()->flush();
        return redirect()->route('user_login.index');
    }
}
