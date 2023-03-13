<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class CartController extends Controller
{
    public function index()
    {
        $data['ordered'] = DB::table('cart')
            ->leftjoin('tblbrand', 'cart.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'cart.t_id', '=', 'tbltype.id')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('cart.user_id', 'tbluser.name as u_name', 'tbluser.phone_number', 'tbluser.email', 
                    DB::raw('SUM(price) as SubTotal'),
                    DB::raw('COUNT(price) as TotalItem'))
            ->where('cart.status',1)
            ->groupBy('cart.user_id')
            ->orderBy('cart.user_id', 'DESC')
            ->get();
        return view('admin::cart.index', $data);
    }

   public function cartDetail(Request $id)
   {
        $id->id;
        $data['user'] = DB::table('cart')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('tbluser.*', 'tbluser.name as u_name')
            ->where('cart.user_id', $id->id)->first();

        $data['list_order'] = DB::table('cart')
            ->leftjoin('tblbrand', 'cart.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'cart.t_id', '=', 'tbltype.id')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('cart.*', 'tblbrand.name as b_name', 'tbltype.name as t_name', 'tbluser.name as u_name')
            ->where('cart.user_id', $id->id)->get();

        return view('admin::cart.detail', $data);
    }

    public function accepted(Request $id)
    {
        $id->id;
        $data['accepted'] = DB::table('cart')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('cart.user_id', 'tbluser.id')
            ->where('cart.user_id', $id->id)
            ->update(['cart.status' => 2]);
        if($data){
            return redirect()->route('cart.index')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('cart.index')
                ->with('error', config('app.error'));
        }
    }

    public function complete()
    {
        $data['completed'] = DB::table('cart')
            ->leftjoin('tblbrand', 'cart.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'cart.t_id', '=', 'tbltype.id')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('cart.user_id', 'tbluser.name as u_name', 'tbluser.phone_number', 'tbluser.email', 
                    DB::raw('SUM(price) as SubTotal'),
                    DB::raw('COUNT(price) as TotalItem'))
            ->where('cart.status',2)
            ->groupBy('cart.user_id')
            ->orderBy('cart.user_id', 'DESC')
            ->get();
        return view('admin::cart.complete', $data);
    }

    public function viewDone( Request $id)
    {
        $data['user'] = DB::table('cart')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('tbluser.*', 'tbluser.name as u_name')
            ->where('cart.user_id', $id->id)->first();

        $data['list_order'] = DB::table('cart')
            ->leftjoin('tblbrand', 'cart.b_id', '=', 'tblbrand.id')
            ->leftjoin('tbltype', 'cart.t_id', '=', 'tbltype.id')
            ->leftjoin('tbluser', 'cart.user_id', '=', 'tbluser.id')
            ->select('cart.*', 'tblbrand.name as b_name', 'tbltype.name as t_name', 'tbluser.name as u_name')
            ->where('cart.user_id', $id->id)->get();
            
        return view('admin::cart.done', $data);
    }
}
