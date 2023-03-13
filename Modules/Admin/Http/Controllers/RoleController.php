<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['roles'] = DB::table('roles')
            ->where('active', 1)
            ->paginate(config('app.row'));
        return view('admin::roles.index', $data);
    }

    
    public function create()
    {
        return view('admin::roles.create');
    }

    public function detail($id)
    {
        $data['roles'] = DB::table('roles')->where('id', $id)->first();
        $sql = "select permissions.id as pid, permissions.alias, tbl.* from permissions
                left join (SELECT * from role_permissions WHERE role_id=$id) as tbl
                on permissions.id = tbl.permission_id";
        $data['permissions'] = DB::select($sql);
        return view('admin::roles.detail', $data);
    }

   
    public function store(Request $request)
    {
        $data = array(
            'name' => $request->name
        );
        $i = DB::table('roles')->insert($data);
        if($i){
            return redirect()->route('role.create')
                ->with('success', config('app.success'));
        }else{
            return redirect()->route('role.create')
                ->with('error', config('app.error'));
        }
    }
    
    public function edit($id)
    {
        $data['roles'] = DB::table('roles')
            ->where('id', $id)->first();
        return view('admin::roles.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->name
        );
        $i = DB::table('roles')->where('id', $id)
            ->update($data);
        if($i){
            return redirect()->route('role.edit', $id)
                ->with('success', config('app.success'));
        }else{
            return redirect()->route('role.edit', $id)
                ->with('error', config('app.error'));
        }
    }

    public function delete($id)
    {
        $data = DB::table('roles')
            ->where('id', $id)
            ->update(['active' => 0]);
        if($data){
            return redirect()->route('role.index')
                ->with('success', config('app.delete'));
        }else{
            return redirect()->route('role.index')
                ->with('error', config('app.error'));
        }
    }

    public function save_permission(Request $r)
    {
        $i=0;
        if($r->rpid>0)
        {
            //update role_permissions
            $data = array(
                'role_id' =>$r->role_id,
                'permission_id' => $r->pid,
                'list' => $r->list,
                'create' =>$r->create,
                'edit' => $r->edit,
                'delete' => $r->del
            );
            DB::table('role_permissions')->where('id', $r->rpid)
                    ->update($data);
                $i = $r->rpid;
         }
         else{
            //insert into role_permissions
            $data = array(
                'role_id' =>$r->role_id,
                'permission_id' => $r->pid,
                'list' => $r->list,
                'create' =>$r->create,
                'edit' => $r->edit,
                'delete' => $r->del
            );
           $i = DB:: table('role_permissions')->insertGetId($data); 
        }
        return $i;
    }
}
