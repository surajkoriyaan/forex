<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Broker;
class CkeditorController extends Controller
{
    function index(Request $req){
      //if ($req->hasFile('upload')) {
           //$file=$req->upload;
           //echo $file;
           //$originName=$req->file('upload')->getClientOriginalName();
           //$newfilename=time().$originName;
           //$dir='images/';
           if ($req->hasfile('upload')) {
             $file=$req->file('upload');
             $extension=$req->file('upload')->getClientOriginalExtension();
             $filename=time().".".$extension;
             $file->move('uploads/broker/',$filename);
             //$data->logo=$filename;
             $CkeditorFuncNum=$req->input('CKEditorFuncNum');
             $url=asset("uploads/broker/$filename");
             $msg='Image uploaded successfullly';
             $response="<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','$msg')</script>";
             echo $response;
           }
          // $file->move($dir,$newfilename);
          // $url=asset('images/'.$newfilename);
          // $fileName=pathinfo($originName, PATHINFO_FILENAME);
          // $extension=$req->file('upload')->getClientOriginalExtension();
          // $fileName=$fileName.'_'.time().'.'.$extension;
          // $req->file('upload')->move('images/',$fileName);
          //  $CkeditorFuncNum=$req->input('CKEditorFuncNum');
          // $url=asset('images/'.$fileName);
          // //$msg-'Image uploaded successfullly';
          // $response='<script>window.parent.CKEDITOR.tools.callFunction('$CKEditorFuncNum','$url','file uploaded')</script>';
          // //@header('Content-type: text/html; charset-utf-8');
          // echo $response;
      //}
    }
    function show(){
      $data=Broker::all();
      return view('showimage',["data"=>$data]);
    }
}
