<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    public function index()
    {
        $data['news'] = DB::table('news')
            ->get();
        return view('news.index', $data);
    }
}
