<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RegisterController extends Controller
{

    // User register account 
    public function register()
    {
        return view('login.register');
    }

    public function save(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'phone_number' => $request->phone,
            'email' => $request->email,
            'password' => $request->password
        );
        // $request->validate([
        //     'name' => 'required|min:6',
        //     'phone_number' => 'required|min:6',
        //     'email' => 'required|min:5|unique:tbluser',
        //     'password' => 'required|min:3',
        // ]);
        // $data['password'] = bcrypt ($request->password);
        
        $i = DB::table('tbluser')->insertGetId($data);
        if($i){
            return redirect()->route('user_login.index')
                ->with('success', config('app.register'));
        }
        else{
            return redirect()->route('register.index')
                ->with('error', config('app.error'));
        }
    }
}
