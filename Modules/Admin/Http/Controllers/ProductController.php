<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['q'] = '';
        $data['p_phone'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->orderBy('tblbrand.name', 'ASC')
            ->paginate(config('app.row'));
        return view('admin::product.index', $data);
    }

    public function search(Request $r)
    {
        $data['q'] = $r->q;
        $data['p_phone'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->rightjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('title', 'like', "%{$r->q}%")
            ->orWhere('price', 'like', "%{$r->q}%")
            ->orWhere('tblbrand.name', 'like', "%{$r->q}%")
            ->orWhere('tbltype.name', 'like', "%{$r->q}%")
            ->orWhere('stock.name', 'like', "%{$r->q}%")
            ->paginate(config('app.row'));
        return view('admin::product.index', $data);
    }

    public function create()
    {
        $data['types'] = DB::table('tbltype')->where('status', 1)->get();
        $data['brand'] = DB::table('tblbrand')->where('status', 1)->get();
        $data['stock'] = DB::table('stock')->where('status', 1)->get();
        return view('admin::product.create', $data);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token', 'photo');
        $data = array(
            'title' => $request->title,
            'price' => $request->price,
            'deposit' => $request->deposit,
            'ram' => $request->ram,
            'description' => $request->description,
            'storage' => $request->storage,
            'discount' => $request->discount,
            'b_id' => $request->brand,
            't_id' => $request->p_type,
            's_id' => $request->status
        );
        
        if($request->photo){
            $data['photo'] = $request->file('photo')->store('uploads/product', 'custom');
        }

        $i = DB::table('tblproduct')->insertGetId($data);
        if($i)
        {
            return redirect()->route('product.create')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('producct.create')
                ->with('error', config('app.error'));
        }
    }

    public function edit($id)
    {
        $data['brand'] = DB::table('tblbrand')->where('status', 1)->get();
        $data['type'] = DB::table('tbltype')->where('status', 1)->get();
        $data['stock'] = DB::table('stock')->where('status', 1)->get();
        $product = DB::table('tblproduct')->where('id', $id)->first();
        $data['product'] = $product;
        return view('admin::product.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->except('_token', 'photo', '_method');
        $data = array(
            'title' => $request->title,
            'price' => $request->price,
            'deposit' => $request->deposit,
            'ram' => $request->ram,
            'description' => $request->description,
            'storage' => $request->storage,
            'discount' => $request->discount,
            'b_id' => $request->brand,
            't_id' => $request->p_type,
            's_id' => $request->status
        );

        if($request->photo){
            $data['photo'] = $request->file('photo')->store('uploads/product', 'custom');
        }
        $data['product'] = DB::table('tblproduct')
            ->where('id', $id)->update($data);
        if($data){
            return redirect()->route('product.edit', $id)
                ->with('success', config('app.success'));
        }else{
            return redirect()->route('product.edit', $id)
                ->with('error', config('app.error'));
        }
    }

    public function delete($id)
    {
        $product = DB::table('tblproduct')->find($id);
        $i = DB::table('tblproduct')->where('id', $id)
            ->delete();
        if($i)
        {
            if($product->photo){
                @unlink($product->photo);
            }
            return redirect()->route('product.index')
                ->with('success', config('app.delete'));
        }
        else{
            return redirect()->route('product.index')
                ->with('error', config('app.fail_del'));
        }
    }
}
