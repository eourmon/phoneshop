<?php
namespace Modules\Admin\Http\Controllers;
use DB;
use Auth;
    Class Permission{
        public static function check($p_name, $a_name){
            $role_id = Auth::user()->role_id;
            $query = DB::table('role_permissions')
                ->join('permissions', 'role_permissions.permission_id', 'permissions.id')
                ->select('role_permissions.*')
                ->where('role_permissions.role_id', $role_id)
                ->where('permissions.name', $p_name);
            if($a_name == 'l'){
                $query = $query->where('role_permissions.list', 1);
            }
            else if($a_name == 'i'){
                $query = $query->where('role_permissions.create', 1);
            }
            else if($a_name == 'e'){
                $query = $query->where('role_permissions.edit', 1);
            }
            else if($a_name == 'd'){
                $query = $query->where('role_permissions.delete', 1);
            }
            $query = $query->get();
            return (count($query)>0);
        }
    }
?>