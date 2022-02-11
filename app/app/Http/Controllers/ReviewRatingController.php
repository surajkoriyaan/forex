<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewUser;
use App\Models\ReviewRating;
use Session;

class ReviewRatingController extends Controller
{
    function index(){
        $data=ReviewRating::all();
        return view('admin.reviews',["data"=>$data]);
    }
    function editreview($id){
        $row=ReviewRating::find($id);
        $data=ReviewUser::where('google_id',$row->google_id)->first();
        return view('admin.editreviewrating',["data"=>$data,"row"=>$row]);
    }
    function reviewratingaction(Request $req){
        $data=ReviewRating::find($req->id);
        $data->status=$req->approval;
        $data->rating=$req->rating;
        $data->comments=$req->comments;
        $data->update();
        return redirect('review-rating')->with('success','review approved.');
    }
}
