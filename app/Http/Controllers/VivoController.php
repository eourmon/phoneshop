<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class VivoController extends Controller
{
    public function index()
    {
        $data['vivo'] = DB::table('tblproduct')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tbltype.name', 'new')
            ->where('tblbrand.name', 'Vivo')->take(4)
            ->get();
        return view('vivo.index', $data);
    }
}
