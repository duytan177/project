<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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

//        $this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    public function showRegister(Request $request)
    {

        $cities = DB::table('cities')->get(['id','name']);
        $code = $request->code;
        $sponsor_code = DB::table('users')->where('role', '2')->get();
        if (!empty($code)) {
            foreach ($sponsor_code as $value) {
                if ($value->sponsor == $code) {
                    return response()->json($cities);
                    return view('auth.register', ['cities' => $cities, 'code' => $code]);
                }
            }
            return redirect()->route('register')->with('error', 'Mã code không chính xác');
        } else {
            return response()->json($cities);
            return view('auth.register', ['cities' => $cities, 'code' => $code]);
        }
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
        $users->address2 = $request->address2;
        $users->codepostal = $request->codepostal;
        $users->city_id = $request->city;
        $users->siret = $request->siret;
        $users->vat = $request->VAT;
        $users->iban = $request->IBAN;
        $users->swift = $request->swift;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number = "0123456789";
        $randomString = '';

        for ($i = 0; $i < 8; $i++) {
            if($i<4) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }else{
                $index = rand(0, strlen($number) - 1);
                $randomString .= $number[$index];
            }
        }

        $users->sponsor = $randomString;
        $users->numberSSRS = $request->numberSSRS;
        $users->default = $request->default;
        $users->provider = $request->provider;
        $users->dissertation = $request->dissertation;
        $users->api_token = $request->_token;
        $token = $request->_token;
        $boo = $users->save();
        if($boo) {
            if ($users->sponsor) {
                $parent_user_id = DB::table('users')->where('sponsor', $request->sponsor)->first();
                $param = [
                    'user_id' => $users->id,
                    'parent_user_id' => $parent_user_id->id
                ];
                $result = DB::table('sponsor_code')->insert($param);
            }
                Auth::login($users);
            return response()->json(['token' => $token]);
            return redirect()->route('login')->with('success', 'Đăng ký tài khoản thành công');
        }


    }
}
