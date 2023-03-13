<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
use Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(!Permission::check('user', 'l')){
            return view('admin::roles.no');
        }
        $data['q'] = '';
        $data['users'] = DB::table('users')
            ->leftjoin('roles' ,'users.role_id', '=' , 'roles.id')
            ->select('users.*' ,'roles.name as r_name')
            ->orderBy('users.id', 'DESC')
            ->paginate(config('app.row'));
        return view('admin::users.index', $data);
    }

    public function search(Request $r)
    {
        $data['q'] = $r->q;
        $data['users'] = DB::table('users')
            ->leftjoin('roles' ,'users.role_id', '=' , 'roles.id')
            ->select('users.*' ,'roles.name as r_name')
            ->where('name', 'like', "%{$r->q}%")
            ->orWhere('username', 'like', "%{$r->q}%")
            ->orWhere('email', 'like', "%{$r->q}%")
            ->paginate(config('app.row'));
        return view('admin::users.index', $data);
    }

    public function create()
    {
        if(!Permission::check('user', 'i')){
            return view('admin::roles.no');
        }
        $data['roles'] = DB::table('roles')->where('active', 1)->get();
        return view('admin::users.create', $data);
    }

    public function store(Request $request)
    {
        if(!Permission::check('user', 'i')){
            return view('admin::roles.no');
        }
        $request->validate([
            'name' => 'required|min:6',
            'username' => 'required|min:6',
            'email' => 'required|min:5|unique:users',
            'password' => 'required|min:3',
        ]);
        $data = array(
            'role_id' => $request->role_id
        );
        $data = $request->except('_token', 'password', 'photo');
        $data['password'] = bcrypt ($request->password);
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/users', 'custom');
        }
        $i = DB::table('users')->insert($data);
        if($i)
        {
            return redirect()->route('user.create')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('user.create')
                ->with('error', config('app.error'))
                ->withInput();
        }
    }

   
    public function edit($id)
    {
        if(!Permission::check('user', 'e')){
            return view('admin::roles.no');
        }
        $data['roles'] = DB::table('roles')->where('active', 1)->get();
        $data['user'] = DB::table('users')->find($id);
        return view('admin::users.edit', $data);
    }


    public function update(Request $request, $id)
    {
        if(!Permission::check('user', 'e')){
            return view('admin::roles.no');
        }
        $data = array(
            'name' => $request->name,
            'username' => $request->username,
            'email' =>$request->email,
            'role_id' => $request->role_id
        );
        if($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/users', 'custom');
        }
        $i = DB::table('users')->where('id', $id)->update($data);
        if($i)
        {
            return redirect()->route('user.edit', $id)
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('user.edit', $id)
                ->with('error', config('app.error'));
        }
    }

    
    public function delete($id)
    {
        if(!Permission::check('user', 'd')){
            return view('admin::roles.no');
        }
        $user = DB::table('users')->find($id);
        $i = DB::table('users')->where('id', $id)
            ->update(['active' =>0]);
        if($i)
        {
            // if($user->photo)
            // {
            //     @unlink($user->photo);
            // }
            return redirect()->route('user.index')
                ->with('success', 'Data has been remove!');
        }
        else{
            return redirect()->route('user.index')
                ->with('error', 'Fail to delete data!');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('admin');
    }

    public function reset_password()
    {
        return view('admin::users.reset');
    }

    public function save_password(Request $request)
    {
        $pass = $request->password;
        $cpass = $request->cpassword;
        if($pass != $cpass)
        {
            return redirect()->route('user.reset')
                ->with('error', 'Password and confirmed password is not matched!');
        }
        $pass = bcrypt($pass);
        $i  = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update(['password' => $pass]);
        if($i)
        {
            return redirect()->route('user.reset')
                ->with('success', 'New Password has been saved!');
        }
        else{
            return redirect()->route('user.reset')
                ->with('error', 'Fail to change password!');
        }
    }
}
