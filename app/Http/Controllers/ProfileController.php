<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

use Zip;
use ZipArchive;

class ProfileController extends Controller
{
    public function __construct()
    {

    }
        public function index(){
        $userID = \Auth::user()->id;
        $profile = DB::table('profile')->where('user_id',$userID)->get();
        $result = DB::table('profile_upload_file')->get();
        return view('profile.index',['result' => $result,'profile' => $profile]);
    }
    public function create(){
        return view("profile.add");
    }
    public function storeFile(Request $request){

        $userID = \auth()->user()->id;

        $request->validate([
            'imageUpload' => ['required']
        ],[
            'imageUpload.required' => 'Chưa upload ảnh'
        ]);
        $imagesUpload = $request->file('imageUpload');
        //khi tao file profile moi neu da co profile chi chinh sua thi khong caN TAO NUA
        if($request->id == null) {
            $paramProfile = [
                'num_affair' => $request->numAffair,
                'default' => $request->default,
                'service_price' => $request->servicePrice,
                'request_authority' => $request->authority,
                'type_of_service' => $request->service,
                'created_at' => $request->date,
                'updated_at' => $request->serviceDate,
                'user_id' => $userID
            ];
            DB::table('profile')->insert($paramProfile);
            $idprofile = DB::table('profile')->orderBy('id', 'desc')->first();

            //create invoice
            $date = date('Ym-',strtotime(date($idprofile->created_at)));
            $paramInvoice = [
                'num_invoice' => $date.$idprofile->id,
                'rising' => 50,
                'user_id' => $userID,
                'profile_id' => $idprofile->id
            ];
            DB::table('invoices')->insert($paramInvoice);
        }
        foreach ($imagesUpload as $key => $value){
            $name = $value->getClientOriginalName();
            $path = 'public/images/';
            $imagepath = $path.$name;
            $imagename = explode('.',$name)[0];
            $index = DB::table('profile_upload_file')->where('profile_id',isset($request->id)?$request->id:$idprofile->id)->orderBy('index','desc')->first();

            $param = [
                'profile_id' => empty($idprofile->id)?$request->id:$idprofile->id ,
                'document_name' => $imagename,
                'document_path' => $imagepath,
                'index' => empty($index)?1:$index->index+1
            ];
            DB::table('profile_upload_file')->insert($param);
            $imagesUpload[$key]->move($path,$imagepath);
        }
        return redirect()->back();
    }
    public function show($profile_id,$id){
        if($id && $profile_id){
            $image = DB::table('profile_upload_file')->where('id',$id)->first();
            $result = DB::table('profile_upload_file')->where('profile_id',$profile_id)->get();
            $profile = DB::table('profile')->where('id',$profile_id)->first();
            return view('profile.detail',['image' => $image,'result' => $result,'profile' => $profile ,'profileID'=> $profile_id]);
        }else {
            return $this->index();
        }
    }

    public function edit($id){
        $profile = DB::table('profile')->where('id',$id)->first();
        $result = DB::table('profile_upload_file')->where('profile_id',$profile->id)->get();
        return view('profile.detail',['result' => $result,'profile' => $profile,'profileID'=>$id]);
    }
    public function destroy($id){
        if($id)
        {
            DB::table('profile_upload_file')->where('profile_id',$id)->delete();
            DB::table('profile')->where('id',$id)->delete();

            return redirect()->back()->with('success','Xóa profile thành công');
        }
    }

    public function view()
    {
        $result = DB::table('profile_upload_file')->where('profile_id', 1)->get();
        $profile = DB::table('profile')->where('id', 1)->first();
        $files = DB::table('profile_upload_file')->where('profile_id',1)->get(['document_path']);
        return view('profile.view', ['result' => $result, 'profile' => $profile,'files'=>json_encode($files)]);
    }

    public function downloadFile(Request $request)
    {
       $files =  json_decode($request->downloadFile);
       $zip = new ZipArchive;
       $zipFileName = 'images.zip';
       if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
           foreach ($files as $file) {
               $zip->addFile($file->document_path, basename($file->document_path));
           }
           $zip->close();
           return response()->download($zipFileName,"images.zip")->deleteFileAfterSend();

       } else {
           return 'Could not create zip file';
       }

        // $zip = new ZipArchive();
        // $filename = "images.zip";
        // if ($zip->open(public_path($filename), ZipArchive::CREATE) === TRUE) {
        //     $files = File::files(public_path('images'));
        //     foreach ($files as $file) {
        //         $zip->addFile($file, basename($file));
        //     }
        //     $zip->close();
        //     return response()->download(public_path($filename));

    }


}
