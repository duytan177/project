<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        
    }

    // public function Login(Request $request){
    //     $user = new User();
    //     $users = $user->all();
    //      foreach($users as $item){
    //         if($item->email == $request->email && Hash::check($request->password, $item->password)){
    //             if($item->role == 1){
    //                 return redirect()->route('user');
    //             }else if($item->role == 2){
    //                 return redirect()->route('dashboard');
    //             }
    //         }
    // }
    // return redirect()->back()->with('success','Đăng nhập thất bại');
    // }
}
