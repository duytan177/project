<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class SponsorshipController extends Controller
{

    public function index(){

            $parent_user_id = auth::user()->id;

            $parent_user = DB::table('sponsor_code')->where('parent_user_id',12)->get();
            $sponsor = "";
            $code = "";
            $code = DB::table('users')->where('id',$parent_user_id)->first()->sponsor;
            if(count($parent_user)) {
                $sponsor = [[]];
                foreach ($parent_user as $id => $value) {
                    $user_id = DB::table('users')->where('id', $value->user_id)->first();
                    $code = $user_id->sponsor;
                    if ($sponsor == [[]]) {
                        $sponsor = [$id => [
                            'name' => $user_id->name,
                            'date' => $parent_user[$id]->updated_at,
                            'active' => $user_id->active
                        ]];
                    } else {
                        $sponsor += [$id => [
                            'name' => $user_id->name,
                            'date' => $parent_user[$id]->updated_at,
                            'active' => $user_id->active,
                        ]];
                    }
                }

            }
            return response()->json($sponsor);
            return view("layouts.sponsorship",['sponsor' =>$sponsor,'code' => $code]);


    }
    public function index1(){
        try {
//            $parent_user_id = auth::user()->id;
            $parent_user = DB::table('sponsor_code')->where('parent_user_id',12)->get();
            $sponsor = "";
            $code = "";
            if(count($parent_user)) {
                $code = "";
                $sponsor = [[]];
                foreach ($parent_user as $id => $value) {
                    $user_id = DB::table('users')->where('id', $value->user_id)->first();
                    $code = $user_id->sponsor;
                    if ($sponsor == [[]]) {
                        $sponsor = [$id => [
                            'name' => $user_id->name,
                            'date' => date('d-m-Y',strtotime(date($parent_user[$id]->created_at))),
                            'active' => $user_id->active
                        ]];
                    } else {
                        $sponsor += [$id => [
                            'name' => $user_id->name,
                            'date' => $parent_user[$id]->created_at,
                            'active' => $user_id->active
                        ]];
                    }
                }

            }

            return response()->json( $sponsor);
        } catch (ModelNotFoundException $ex) { // User not found
            abort(422, 'Invalid email: administrator not found');
        } catch (Exception $ex) { // Anything that went wrong
            abort(500, 'Could not create office or assign it to administrator');
        }
    }

}
