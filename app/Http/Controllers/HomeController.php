<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index1()
    {
        return view('layouts.invoice');
    }
    public function index2(Request $request)
    {
        $result = DB::table('users')->where('role',2)->get();
        return view('layouts.invoice2',['result' => $result]);
    }

    public function setting(){
        return view('layouts.setting');
    }

    public function detail($id){
        $result = DB::table('users')->where('role',2)->where('id',$id)->first();
        return view('user.detail',['result' => $result]);
    }
    public function promotion(){
        return view('layouts.promotion');
    }

    public function demo(){
        return view('demo');
    }

}
