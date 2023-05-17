<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Rules\IbanRule;
use App\Rules\SirenRule;
use App\Rules\SiretRule;
use Carbon\Carbon;

use Faker\Calculator\Luhn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request)
    {
            $result = DB::table('users')->where('role',2)->get();
            return view('user.index',['result' => $result]);
    }

    public function create(){
        $cities = DB::table('cities')->get();
        return response()->json($cities);
//        return view('user.add',['cities' => $cities]);
    }
    public function store(UserRequest $request){
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
        return redirect()->route('user')->with('success','Đăng ký tài khoản thành công');
    }
    public function show($id){

        $result = DB::table('users')->where('id',$id)->first();
        $cities = DB::table('cities')->get();
        $name = explode(' ',$result->name);
        $lastname = $name[count($name)-1];
        $firstname = [];
        for($i = 0; $i < count($name)-1;$i++){
            $firstname[$i] = $name[$i];
        }
        return view('user.detail',['result' => $result,'cities' => $cities,'firstname' => $firstname,'lastname' => $lastname]);
    }

    public function update(Request $request,$id){
        $request->validate(
            [
                'status' => ['required'],
                'firstname' => ['required',  'max:30'],
                'lastname' => ['required', 'max:30'],
                'email' => ['required', 'email', 'max:255'],
                'dateofbirth' => ['required','before_or_equal:'.Carbon::now()->subYear(18)->format('Y-m-d')],
                'address1' => ['required'],
                'address2' => ['required'],
                'codepostal' => ['required'],
                'siret' => ['required', new SiretRule(),'max:14','min:14'],
                'VAT' => ['required',new SirenRule(),'max:9','min:9'],
                'IBAN' => ['required',new IbanRule(),'max:26','min:26'],
                'swift' => ['required'],
                'swift' => ['required'],
                'sponsor' => ['required'],
                'numberSSRS' => ['required'],
                'default' => ['required'],
                'provider' => ['required'],
                'dissertation' => ['required']
            ],
            [
                'required' => ":attribute không được để trống",
                'email.email' => "Email chưa đúng định dạng",
                'dateofbirth.before_or_equal' => "Người dùng phải trên 18 tuổi",
                'date' => "Sai kiểu dữ liệu date",
                'max' => ':attribute phải có :max ký tự',
                'min' => ':attribute phải có :min ký tự'
            ]
        );
        $users = new User();
        $password = DB::table('users')->where('id',$id)->first('password');
        $users = $users->find($id);
        $users->name = $request->firstname." ".$request->lastname;
        $users->active = $request->active;
        $users->status = $request->status;
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
        return redirect()->route('user')->with('success','Cập nhập tài khoản thành công');
    }

    public function destroy($id){
        if($id){
        User::where('id',$id)->delete();
        return redirect()->back()->with('success','Xóa user thành công');
        }else{
            return redirect()->back()->with('errors','Xóa user thất bại');
        }
    }

}
