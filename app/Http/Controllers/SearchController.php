<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['q'] = '';
        $data['phone'] = DB::table('tblproduct')
        ->leftjoin('tblbrand', 'tblproduct.b_id', '=', 'tblbrand.id')
        ->leftjoin('tbltype', 'tblproduct.t_id', '=', 'tbltype.id')
        ->leftjoin('stock', 'tblproduct.s_id', '=', 'stock.id')
        ->select('tblproduct.*', 'tblbrand.name as b_name', 'tbltype.name as p_type', 'stock.name as s_name')
        ->orderBy('tblbrand.name', 'ASC');
        return view('search.index', $data);
    }
}
