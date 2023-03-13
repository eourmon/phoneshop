<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SecondHandProduct extends Controller
{
    public function index()
    {
        $data['secondhand'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name as p_type')
            ->where('tbltype.name', 'secondhand')
            ->get();
        return view('secondhand.index', $data);
    }
}
