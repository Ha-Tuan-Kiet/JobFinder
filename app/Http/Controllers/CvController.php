<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cv.create');
    }
    public  function create(Request $request){
        if($request->isMethod("POST")){
            $cv= new Cv();
            $cv->user_id=auth()->id();
            $cv->avatar=$request->file('avatar');
            $cv->full_name=$request->input('full_name');
            $cv->email=$request->input('email');
            $cv->Day_of_birth=$request->input('Day_of_birth');
            $cv->phone=$request->input('phone');
            $cv->gender=$request->input('gender');
            $cv->address=$request->input('address');
            $cv->career_goals=$request->input('career_goals');
            $cv->education=$request->input('education');
            $cv->experience=$request->input('experience');
            $cv->activity=$request->input('activity');
            $cv->skill=$request->input('skill');
            $cv->certificate=$request->input('certificate');
            $cv->prize=$request->input('prize');

            $cv->save();
            return back();
        }
        return view('Cv.create');
    }
}
