<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
        $result = DB::table('profile_upload_file')->get();
        return view('profile.profile',['result' => $result]);
    }
    public function store(Request $request){

        $request->validate([
            'imageUpload' => ['required','image']
        ],[
            'imageUpload.required' => 'Chưa upload ảnh',
            'imageUpload.image' => 'Đây không phải là file ảnh'
        ]);
        $path = 'public/images/';
        $imagepath = $path.$request->file('imageUpload')->getClientOriginalName();
        $imagename = explode('.',$request->imageUpload->getClientOriginalName())[0];
        $index = DB::table('profile_upload_file')->where('profile_id',2)->orderBy('index','desc')->first('index');
        $param = [
            'profile_id' => 1,
            'document_name' => $imagename,
            'document_path' => $imagepath,
            'index' => empty($index)?1:$index->index+1
            ];
        dd($param);
        DB::table('profile_upload_file')->insert($param);
        $request->file('imageUpload')->move($path,$imagepath);
        return redirect()->back();
    }
    public function show($id){
        if($id){

            $image = DB::table('profile_upload_file')->where('id',$id)->first();
            return view('profile.profile',['image' => $image,'result' => $this->index()->result]);
        }
        return $this->index();
    }
}
