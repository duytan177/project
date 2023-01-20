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
    public function __construct()
    {
        
    }

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
        $sortType = $request->input($request->input('sortType'));
        $sort = $request->input("sort");
        $sortType = $request->input("sortType")?$request->input("sortType"):"asc";
        if($sort != null && $sortType == "asc"){
            $sortType= "desc";
        }else{
            $sortType = "asc";
        }
        if($sort){
            $result = DB::table("users")->where('role',2)->orderBy($sort,$sortType);
        }else{
            $result = DB::table("users")->where('role',2);
        }
        $result = $result->get();
        return view('layouts.invoice2',['result' => $result,'sortType' => $sortType]);
    }

    public function setting(){
        return view('layouts.setting');
    }
    public function user(){
        return view('user.index');
    }
    public function detail(){
        return view('user.detail');
    }
    public function promotion(){
        return view('layouts.promotion');
    }

    public function demo(){
        return view('demo');
    }
}
