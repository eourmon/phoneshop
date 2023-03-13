<?php

namespace App\Providers;
use Session;
use App\Models\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use DB;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */  
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', function($view){
            $companies = DB::table('companies')->find(1);
                view()->share('companies', $companies);
            $menu = DB::table('tblbrand')->where('status',1)->get();
                view()->share('menu', $menu);
            $cartItem = 0;
            $totalPrice = 0;
            $cartList = null;
            $user_id = 0;
            if(Session::get('user')!=null){
                $user_id = Session::get('user')->id;
                $cartItem = DB::table('cart')->where('user_id', $user_id)->count();
                $totalPrice = DB::table('cart')->where('user_id', $user_id)->sum('price');
                $cartList = DB::table('cart')
                    ->leftjoin('tbltype', 'cart.t_id', '=', 'tbltype.id')
                    ->leftjoin('tblbrand', 'cart.b_id', '=', 'tblbrand.id')
                    ->select('cart.*', 'tblbrand.name as b_name', 'tbltype.name as p_type')
                    ->where('user_id', $user_id)->orderBy('id', 'DESC')
                    ->get();
            }
                view()->share('cartItem', $cartItem);
                view()->share('cartList', $cartList);
                view()->share('totalPrice', $totalPrice);
        });

        Blade::if('canview', function($expression){
            $role_id = Auth::user()->role_id;
            $q = DB::table('role_permissions')
                ->join('permissions','permissions.id','=', 'role_permissions.permission_id')
                ->select('role_permissions.*')
                ->where(['role_permissions'.'.role_id' => $role_id,'permissions.name' => $expression])
                ->where('role_permissions.list', 1);

            $i = $q->count() > 0;
            if($i)
            {
                return true;
            }
            else{
                return false;
            }
        });
        Blade::if('canviewrole', function($expression){
            $role_id = Auth::user()->role_id;
            $q = DB::table('role_permissions')
                ->join('permissions','permissions.id','=', 'role_permissions.permission_id')
                ->select('role_permissions.*')
                ->where(['role_permissions'.'.role_id' => $role_id,'permissions.name' => $expression])
                ->where('role_permissions.list', 1);

            $i = $q->count() > 0;
            if($i)
            {
                return true;
            }
            else{
                return false;
            }
        });
        Blade::if('cancreate', function($expression){
            $role_id = Auth::user()->role_id;
            $q = DB::table('role_permissions')
                ->join('permissions','permissions.id','=', 'role_permissions.permission_id')
                ->select('role_permissions.*')
                ->where(['role_permissions'.'.role_id' => $role_id,'permissions.name' => $expression])
                ->where('role_permissions.create', 1);

            $i = $q->count() > 0;
            if($i)
            {
                return true;
            }
            else{
                return false;
            }
        });
        Blade::if('canedit', function($expression){
            $role_id = Auth::user()->role_id;
            $q = DB::table('role_permissions')
                ->join('permissions','permissions.id','=', 'role_permissions.permission_id')
                ->select('role_permissions.*')
                ->where(['role_permissions'.'.role_id' => $role_id,'permissions.name' => $expression])
                ->where('role_permissions.edit', 1);

            $i = $q->count() > 0;
            if($i)
            {
                return true;
            }
            else{
                return false;
            }
        });
        Blade::if('candel', function($expression){
            $role_id = Auth::user()->role_id;
            $q = DB::table('role_permissions')
                ->join('permissions','permissions.id','=', 'role_permissions.permission_id')
                ->select('role_permissions.*')
                ->where(['role_permissions'.'.role_id' => $role_id,'permissions.name' => $expression])
                ->where('role_permissions.delete', 1);

            $i = $q->count() > 0;
            if($i)
            {
                return true;
            }
            else{
                return false;
            }
        });
    }
}
