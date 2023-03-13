<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['q'] = '';
        $data['p_brand'] = DB::table('tblbrand')
            ->where('status', 1)->orderBy('id', 'desc')
            ->paginate(config('app.row'));
        return view('admin::brands.index', $data);
    }

    public function search(Request $r)
    {
        $data['q'] = $r->q;
        $data['p_brand'] = DB::table('tblbrand')
            ->where('name', 'like', "%{$r->q}%")
            ->paginate(config('app.row'));
        return view('admin::brands.index', $data);
    }
    
    public function create()
    {
        return view('admin::brands.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name
        );
        $data = $request->except('_token','photo');
        if($request->photo){
            $data['photo'] = $request->file('photo')->store('uploads/brand', 'custom');
        }

        $i = DB::table('tblbrand')->insert($data);   
        if($i)
        {
            return redirect()->route('brand.create')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('brand.create')
                ->with('error', config('app.error'));
        }
    }


   
    public function edit($id)
    {
        $data['brand'] = DB::table('tblbrand')->find($id);
        return view('admin::brands.edit', $data);
    }

   
    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->name
        );
        $data = $request->except('_token', 'photo', '_method');
        if($request->photo){
            $data['photo'] = $request->file('photo')->store('uploads/brand', 'custom');
        }

        $data['brand'] = DB::table('tblbrand')->where('id', $id)->update($data);
        if($data){
            return redirect()->route('brand.index')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('brand.edit' .$id)
                ->with('error', config('app.error'));
        }  
    }

    
    public function delete($id)
    {
        $data = DB::table('tblbrand')->where('id', $id)
            ->update(['status' => 0]);
        if($data){
            return redirect()->route('brand.index')
                ->with('success', config('app.delete'));
        }
        else{
            return redirect()->route('brand.index')
                ->with('fail_del', config('app.fail_del'));
        }
    }
}
