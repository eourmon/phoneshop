<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AllphoneController extends Controller
{
    public function index(Request $request)
    {
        $data['iphone'] =  DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tblbrand.name', 'iPhone')
            ->where('tbltype.name', 'new')
            ->get();
        return view('iPhone.index', $data);
    }
}
