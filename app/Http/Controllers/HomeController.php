<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index2()
    {
        return view('layouts.invoice2');
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
