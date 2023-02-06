<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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

        $this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showRegister(){
        $cities = DB::table('cities')->get();
        return view('auth.register',['cities' => $cities]);
    }
    protected function create(UserRequest $request)
    {

        $users = new User();
        $users->status = $request->status;
        $users->name = $request->firstname." ".$request->lastname;
        $users->password = Hash::make($request->password);
        $users->email = $request->email;
        $users->dateofbirth = $request->dateofbirth;
        $users->address1 = $request->address1;
        $users->address2 = $request->address1;
        $users->codepostal = $request->codepostal;
        $users->city_id = $request->city;
        $users->siret = $request->siret;
        $users->vat = $request->VAT;
        $users->iban = $request->IBAN;
        $users->swift = $request->swift;
        $users->sponsor = $request->sponsor;
        $users->numberSSRS = $request->numberSSRS;
        $users->default = $request->default;
        $users->provider = $request->provider;
        $users->dissertation = $request->dissertation;
        $users->save();
        return redirect()->route('login')->with('success','Đăng ký tài khoản thành công');
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }
}
