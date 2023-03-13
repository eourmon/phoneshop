<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class CompanyController extends Controller
{

    public function index()
    {
        $data ['com'] = DB::table('companies')->find(1);
        return view('admin::company.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $data['com'] = DB::table('companies')->find(1);
        return view('admin::company.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'name' => $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'description'=> $request->description,
        );
        if($request->photo)
        {
            $data['logo'] = $request->file('photo')->store('uploads/companies', 'custom');
        }
        $i = DB::table('companies')->where('id', 1)
            ->update($data);
        if($i)
        {
            return redirect()->route('company.index')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('company.edit')
                ->with('error', config('app.error'));
        }
    }
}
