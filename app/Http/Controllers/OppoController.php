<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class OppoController extends Controller
{
    public function index()
    {
        $data['oppo'] = DB::table('tblproduct')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tbltype.name', 'new')
            ->where('tblbrand.name', 'Oppo')
            ->get();
        return view('oppo.index', $data);
    }
}
