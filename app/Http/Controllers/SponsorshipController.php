<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SponsorshipController extends Controller
{

    public function index(){
        $parent_user_id = auth::user()->id;
        $parent_user = DB::table('sponsor_code')->where('parent_user_id',$parent_user_id)->get();
        $code = "";
        $sponsor = [[]];
        foreach ($parent_user as $id => $value){
            $user_id = DB::table('users')->where('id',$value->user_id)->first();
            $code = $user_id->sponsor;
           if($sponsor == [[]]) {

                $sponsor = [$id => [
                    'name' => $user_id->name,
                    'date' => $parent_user[$id]->updated_at,
                    'active' => $user_id->active
                ]];
            }else{

                $sponsor += [$id => [
                    'name' => $user_id->name,
                    'date' => $parent_user[$id]->updated_at,
                    'active' => $user_id->active
                ]];
            }
        }


        return view('layouts.sponsorship',['sponsor' => $sponsor,'code' => $code]);
    }
}
