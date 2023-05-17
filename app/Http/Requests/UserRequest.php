<?php

namespace App\Http\Requests;

use App\Rules\IbanRule;
use App\Rules\SirenRule;
use App\Rules\SiretRule;
use Carbon\Carbon;
use Faker\Calculator\Luhn;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'status' => ['required'],
            'firstname' => ['required',  'max:30'],
            'lastname' => ['required', 'max:30'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'dateofbirth' => ['required','before_or_equal:'.Carbon::now()->subYear(18)->format('Y-m-d')],
            'address1' => ['required'],
            'address2' => ['required'],
            'codepostal' => ['required'],
            'siret' => ['required', new SiretRule(),'max:14','min:14'],
            'VAT' => ['required',new SirenRule(),'max:9','min:9'],
            'IBAN' => ['required',new IbanRule()],
            'swift' => ['required'],
            'numberSSRS' => ['required'],
            'default' => ['required'],
            'provider' => ['required'],
            'dissertation' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'required' => ":attribute không được để trống",
            'firstname.max' => "firstname phải có số kí tự nhơ hơn :max",
            'email.email' => "Email chưa đúng định dạng",
            'email.unique' => "Email đã được sử dụng vui lòng nhập email khác",
            'password.min' => "Mật khẩu phải có ít nhất 8 ký tự",
            'confirmed' => "Xác nhận mật khẩu không trùng khớp",
            'dateofbirth.before_or_equal' => "Người dùng phải trên 18 tuổi",
            'date' => "Sai kiểu dữ liệu date",
            'max' => ':attribute phải có :max ký tự',
             'min' => ':attribute phải có :min ký tự'
        ];
    }


}
