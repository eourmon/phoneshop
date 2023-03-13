<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['slides'] = DB::table('slides')
            ->where('active', 1)
            ->orderBy('sequence', 'desc')
            ->paginate(config('app.row'));
        return view('admin::slides.index', $data);
    }

    public function create()
    {
        return view('admin::slides.create');
    }

    public function store(Request $request)
    {

        $data = $request->except('_token', 'photo');
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/slides', 'custom');
        }
        $i = DB::table('slides')->insert($data);
        if($i)
            {
                return redirect()->route('slide.create')
                    ->with('success',config('app.success'));
            }
            else{
                return redirect()->route('slide.create')
                ->with('error',config('app.error'))
                ->wihtInput();
            }
    }

    public function edit($id)
    {
        $data['slide'] = DB::table('slides')->find($id);
        return view('admin::slides.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $about = DB::table('slides')->find($id);
        $data = $request->except('_token', 'photo', '_method');
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/slides', 'custom');
            if($about->photo)
            {
                @unlink($about->photo);
            }
        }
        $i = DB::table('slides')->where('id', $id)->update($data);
        if($i)
            {
                return redirect()->route('slide.index')
                    ->with('success',config('app.success'));
            }
            else{
                return redirect()->route('slide.edit', $id)
                ->with('error',config('app.error'));
            }
    }

    public function delete($id)
    {
        $i = DB::table('slides')->where('id', $id)
            ->update(['active'=>0]);
        if($i)
            {
                return redirect()->route('slide.index')
                    ->with('success',config('app.delete'));
            }
            else{
                return redirect()->route('slide.edit')
                ->with('error',config('app.fail_delete'));
            }
    }
}
