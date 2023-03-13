<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AllsamsungController extends Controller
{
    public function index(Request $request)
    {
        $data['samsung'] = DB::table('tblproduct')
            ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
            ->select('tblproduct.*', 'tblbrand.name as b_name', 'tblproduct.status', 'tbltype.name')
            ->where('tblbrand.name', 'Samsung')
            ->where('tbltype.name', 'new')
            ->get();
        return view('samsung.index', $data);
    }
}
