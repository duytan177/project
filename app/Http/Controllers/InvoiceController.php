<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    //
    public function index(){
        $invoices = DB::table('invoices')->get();
        foreach ($invoices as $key => $value){
            $user = DB::table('users')->where('id',$value->user_id)->first();
            $invoices[$key]->username = $user->name;
            $invoices[$key]->retrocession = $user->percentage;

            $profile = DB::table('profile')->where('id',$value->profile_id)->first();
            $date = date('d/m/Y',strtotime(date($profile->created_at)));
            $invoices[$key]->date = $date;
        }

        return view("invoice.index",['invoices' => $invoices]);
    }

    public function detail($id){
        $invoices = DB::table('invoices')->where("id",$id)->get();

        $user = DB::table('users')->where('id',$invoices[0]->user_id)->first();
        $invoices[0]->username = $user->name;
        $invoices[0]->retrocession = $user->percentage;

        $profile = DB::table('profile')->where('id',$invoices[0]->profile_id)->first();
        $date = date('d/m/Y',strtotime(date($profile->created_at)));
        $invoices[0]->date = $date;
            return view("invoice.detail",["invoices"=>$invoices]);
    }

    public function destroy($id){
        dd($id);
    }

    public function printInvoice($id){
        $pdf = App::make('dompdf.wrapper');
        $invoices = DB::table("invoices")->where('id',$id)->get();
        $user = DB::table('users')->where('id',$invoices[0]->user_id)->first();
        $invoices[0]->username = $user->name;
        $invoices[0]->retrocession = $user->percentage;

        $profile = DB::table('profile')->where('id',$invoices[0]->profile_id)->first();
        $date = date('d/m/Y',strtotime(date($profile->created_at)));
        $invoices[0]->date = $date;
        $user = DB::table('users')->where('id', $invoices[0]->user_id)->get();
        $param = [
            'invoices' => $invoices,
            'user' => $user
        ];

        $pdf->loadView('invoice.orderPDF', $param);
        return $pdf->stream();
    }
}
