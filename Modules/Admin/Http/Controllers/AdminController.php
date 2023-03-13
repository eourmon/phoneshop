<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['users'] = DB::table('users')
            ->where('active', 1)
            ->count('id');
        $data['tblproduct'] = DB::table('tblproduct')
            ->where('status', 1)
            ->sum('price');
        return view('admin::dashboard', $data);
    }

    
    public function create()
    {
        return view('admin::create');
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin::show');
    }

   
    public function edit($id)
    {
        return view('admin::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
