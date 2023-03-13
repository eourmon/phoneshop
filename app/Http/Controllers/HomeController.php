<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function search(Request $r){
        $data['search'] = $r->qqq;
        $data['phone'] = DB::table('tblproduct')
        ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
        ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
        ->rightjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
        ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
        ->where('title', 'like', "%{$r->qqq}%")
        ->orWhere('price', 'like', "%{$r->qqq}%")
        ->orWhere('tblbrand.name', 'like', "%{$r->qqq}%")
        ->orWhere('tbltype.name', 'like', "%{$r->qqq}%")
        ->orWhere('stock.name', 'like', "%{$r->qqq}%")
        ->paginate(config('app.row'));
        return view('search.index', $data);
    }
    public function index()
    {
        $data['iphone'] = DB::table('tblproduct')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tblbrand.name', 'iPhone')
            ->where('tbltype.name', 'new')->take(8)
            ->get();
        $data['com'] = DB::table('companies')->find(1);

        $data['slide'] = DB::table('slides')->where('active', 1)
            ->orderBy('sequence')
            ->get();

        $data['samsung'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tbltype.name', 'new')
            ->where('tblbrand.name', 'Samsung')->take(8)
            ->get();

        $data['vivo'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tbltype.name', 'new')
            ->where('tblbrand.name', 'Vivo')->take(8)
            ->get();

        $data['oppo'] = DB::table('tblproduct')     
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tbltype.name', 'new')
            ->where('tblbrand.name', 'Oppo')->take(8)
            ->get();
        $data['secondhand'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tblbrand.name', 'secondhand')
            ->where('tbltype.name', 'new')->take(8)
            ->get();

        $data['news'] = DB::table('news')->where('active', 1)
            ->get();
            
        $data['brand'] = DB::table('tblbrand')
            ->where('status', 1)
            ->get();
        return view('index', $data);
    }
}
