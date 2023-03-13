<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class DetailsController extends Controller
{   
    public function iphone(Request $request)
    {   
        $id = $request->id;
        $data['details'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('tblproduct.id', $id)->first();
       return view('details.iphone', $data);
    }
    
    public function samsung(Request $request)
    {
        $id = $request->id;
        $data['details'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('tblproduct.id', $id)->first();
        return view('details.samsung', $data);
    }

    public function oppo(Request $request)
    {
        $id = $request->id;
        $data['details'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('tblproduct.id', $id)->first();
        return view('details.oppo', $data);
    }

    public function vivo(Request $request)
    {
        $id = $request->id;
        $data['details'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('tblproduct.id', $id)->first();
        return view('details.vivo', $data); 
    }

    public function secondhand(Request $request)
    {
        $id = $request->id;
        $data['details'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
            ->where('tblproduct.id', $id)->first();
        return view('details.secondhand', $data);
    }

    public function specialoffer(Request $request)
    {
        $id = $request->id;
        $data['details'] = DB::table('specialoffer')->where('id', $id)
            ->where('active', 1)->first();
        return view('details.specialoffer', $data);
    }

}
