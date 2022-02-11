<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CskEditorController extends Controller
{
    function index(Request $req){
      if ($req->hasfile('upload')) {
        $file=$req->file('upload');
        $extension=$req->file('upload')->getClientOriginalExtension();
        $filename=rand().time().".".$extension;
        $file->move('uploads/acount_manager/ckeimages/',$filename);
        //$data->logo=$filename;
        $CkeditorFuncNum=$req->input('CKEditorFuncNum');
        $url=asset("uploads/acount_manager/ckeimages/$filename");
        $msg='Image uploaded successfullly';
        $response="<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','$msg')</script>";
        echo $response;
      }
    }

    function signalcskeditor(Request $req){
      if ($req->hasfile('upload')) {
        $file=$req->file('upload');
        $extension=$req->file('upload')->getClientOriginalExtension();
        $filename=rand().time().".".$extension;
        $file->move('uploads/signal_provider/ckeimages/',$filename);
        //$data->logo=$filename;
        $CkeditorFuncNum=$req->input('CKEditorFuncNum');
        $url=asset("uploads/signal_provider/ckeimages/$filename");
        $msg='Image uploaded successfullly';
        $response="<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','$msg')</script>";
        echo $response;
      }
    }

    function signalandaccountcskeditor(Request $req){
      if ($req->hasfile('upload')) {
        $file=$req->file('upload');
        $extension=$req->file('upload')->getClientOriginalExtension();
        $filename=rand().time().".".$extension;
        $file->move('uploads/account_and_signal/ckeimages/',$filename);
        //$data->logo=$filename;
        $CkeditorFuncNum=$req->input('CKEditorFuncNum');
        $url=asset("uploads/account_and_signal/ckeimages/$filename");
        $msg='Image uploaded successfullly';
        $response="<script>window.parent.CKEDITOR.tools.callFunction('$CkeditorFuncNum','$url','$msg')</script>";
        echo $response;
      }
    }
}
