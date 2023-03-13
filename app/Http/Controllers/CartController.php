<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use stdClass;
use Session;
class CartController extends Controller
{

    public function save(Request $request)
    {   
        if($request->session()->has('user'))
        {
            $data = array(
                'user_id' => $request->session()->get('user')->id,
                'product_id' => $request->product_id,
                'title' => $request->title,
                'deposit' => $request->deposit,
                'price' => $request->price,
                'ram' => $request->ram,
                'storage' => $request->storage,
                'discount' => $request->discount,
                's_id' => $request->stock,
                't_id' => $request->type,
                'b_id' => $request->brand,
                'photo' => $request->photo,
                'description' => $request->description,
                'phone_number' => $request->phone_number,
                'name' => $request->name,
                'email' => $request->email
            );
            DB::table('cart')->insert($data);
            //dd($object);
            return redirect('/');
        }
        else{
            return redirect()->route('user_login.index');
        }
    }
    public function payment(Request $request){
        if($request->session()->has('user')){ 
            return redirect('/')
                ->with('success', config('app.sucess_order'));
        }
        else{
            return redirect()->route('user_login.index');
        }
    }
    public function remove(Request $request, $id){

        if($request->session()->has('user')){
            $user_id = Session::get('user')->id;
            DB::table('cart')->delete($id);            
        }
    }  
}
