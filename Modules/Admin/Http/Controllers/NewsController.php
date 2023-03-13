<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['q'] = '';
        $data['news'] = DB::table('news')->where('active', 1)
            ->paginate(config('app.row'));
        return view('admin::news.index', $data);
    }

    public function create()
    {
        return view('admin::news.create');
    }

    public function store(Request $request)
    {
        $data = array(
            'title' => $request->title,
            'user' => $request->user,
            'date' => $request->date,
            'description' => $request->description
        );
        $data = $request->except('_token', 'photo');
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/news', 'custom');
        } 
        $i = DB::table('news')->insert($data);
        if($i)
        {
            return redirect()->route('news.create')
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('news.create')
                ->with('error', config('app.error'));
        }
    }

    
    public function edit($id)
    {
        $data['news'] = DB::table('news')->where('active', 1)->find($id);
        return view('admin::news.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = array(
            'title' => $request->title,
            'user' => $request->user,
            'date' => $request->date,
            'description' => $request->description
        );
        if($request->photo)
        {
            $data['photo'] = $request->file('photo')->store('uploads/news', 'custom');
        }
        $i = DB::table('news')->where('id', $id)->update($data);
        if($i)
        {
            return redirect()->route('news.edit', $id)
                ->with('success', config('app.success'));
        }
        else{
            return redirect()->route('news.edit', $id)
                ->with('error', config('app.error'));
        }
    }

    public function delete($id)
    {
        $data = DB::table('news')->find($id);
        $i = DB::table('news')->where('id', $id)
            ->update(['active' => 0]);
        if($i)
        {   
            if($data->photo)
            {
                @unlink($data->photo);
            }
            
            return redirect()->route('news.index', $id)
                ->with('success', config('app.delete'));
        }
        else{
            return redirect()->route('news.index', $id)
                ->with('error', config('app.fail_del'));
        }
    }

    public function search(Request $r)
    {
        $data['q'] = $r->q;
        $data['news'] = DB::table('news')
            ->where('title', 'like', "%{$r->q}%")
            ->orWhere('user', 'like', "%{$r->q}%")
            ->orWhere('date', 'like', "%{$r->q}%")
            ->paginate(config('app.row'));
        return view('admin::news.index', $data);
    }
    
}