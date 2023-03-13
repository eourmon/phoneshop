<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use DB;
class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['jobs'] = DB::table('jobs')->where('active',1);
        $data['jobs'] = DB::table('jobs')
            ->leftjoin('branchs', 'jobs.b_id', '=','branchs.id')
            ->select('jobs.*', 'branchs.name as bname')
            ->orderBy('id', 'DESC')
            ->paginate(config('app.row'));
        return view('admin::jobs.index', $data);
    }

    
    public function create()
    {
        $data['jobs'] = DB::table('jobs')->where('active', 1);
        $data['provinces'] = DB::table('geography')->where('name', "PROVINCE")->get();
        $data['positions'] = DB::table('positions')->where('active', 1)->get();
        $data['branchs'] = DB::table('branchs')->where('active', 1)->get();
        return view('admin::jobs.create', $data);
    }

    public function get_district()
    {
        $q = $_GET['q'];
        $districts = DB::table('geography')
            ->where('name',"=", "DISTRICT")->select('geography.*',DB::raw('left(id,length(id)-2) As provinceid'))
            ->where(DB::raw('left(id,length(id)-2)'), $q)->get();
            return $districts;
    }

    public function get_commune()
    {
        $q = $_GET['q'];
        $communes = DB::table('geography')
            ->where('name',"=", "COMMUNE")->select('geography.*',DB::raw('left(id,length(id)-2) As communeid'))
            ->where(DB::raw('left(id,length(id)-2)'), $q)->get();
        return $communes;
    }
    
    public function store(Request $request)
    {
        $data = array(
            'job_title' => $request->job_title,
            'hiring' => $request->hiring,
            'address' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
            'commune' => $request->commune,
            'street_name' => $request->street_name,
            'street_number' => $request->street_number,
            'open_date' => $request->open_date,
            'close_date' => $request->close_date,
            'positions' => $request->positions,
            'duration' => $request->duration,
            'job_description' => $request->job_description,
            'job_requirment' => $request->job_requirment,
            'job_skill' => $request->skill,
            'b_id' => $request->branch
        );
        $i = DB::table('jobs')->insertGetId($data);
        if($i)
        {
            return redirect()->route('job.create')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('job.create')
                ->with('error', config('app.error'));
        }
            
    }
 
    public function edit($id)
    { 
        $data['branchs'] = DB::table('branchs')->where('active', 1)->get();
        $job_post = DB::table('jobs')->where('id', $id)->first();  
        $data['job_post'] = $job_post;
        $data['provinces'] = DB::table('geography')->where('name', "PROVINCE")->get();
        if($job_post !=null){
            $data['districts'] = DB::table('geography')->where('name', "DISTRICT")->where(DB::raw('left(id,length(id)-2)'), $job_post->city)->get();
            $data['communes'] = DB::table('geography')->where('name', "COMMUNE")->where(DB::raw('left(id,length(id)-2)'), $job_post->district)->get(); 
        }   
        $data['jobs'] = DB::table('jobs')
            ->leftjoin('positions', 'jobs.p_id', '=', 'positions.id')
            ->select('jobs.*', 'positions.pid as p_name')
            ->where('p_id', $id)->get();      
        return view('admin::jobs.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'job_title' => $request->job_title,
            'hiring' => $request->hiring,
            'address' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
            'commune' => $request->commune,
            'street_name' => $request->street_name,
            'street_number' => $request->street_number,
            'open_date' => $request->open_date,
            'close_date' => $request->close_date,
            'positions' => $request->positions,
            'duration' => $request->duration,
            'job_description' => $request->job_description,
            'job_requirment' => $request->job_requirment,
            'job_skill' => $request->skill,
            'b_id' => $request->branch
        );
        $i = DB::table('jobs')->where('id', $id)->update($data);
        if($i){
            return redirect()->route('job.edit', $id)
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('job.edit', $id)
                ->with('error', config('app.error'));
        }
    }
    public function delete($id)
    {
        $i = DB::table('jobs')->where('id', $id)->update(['active'=>0]);
        if($i){
            return redirect()->route('job.index')
                ->with('success', config('app.delete'));
        }
        else{
            return redirect()->route('job.index')
                ->with('error', config('app.del_fail'));
        }
    }

}
