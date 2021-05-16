<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use PDF;
class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CvCreate()
    {
        return view('Cv.create');
    }
    public  function create(Request $request){
        if($request->isMethod("POST")){
            $cv= new Cv();
            $cv->user_id=auth()->id();
            $cv->phone=$request->input('phone');
            $cv->email=$request->input('email');
            $cv->gender=$request->input('gender');
            $cv->position_apply=$request->input('position_apply');
            $cv->introduction=$request->input('introduction');
            $cv->education=$request->input('education');
            $cv->experience=$request->input('experience');
            $cv->activity=$request->input('activity');
            $cv->skill=$request->input('skill');
            $cv->certificate=$request->input('certificate');
            $cv->hobby=$request->input('hobby');

            $cv->save();
            return back();
        }
        return view('Cv.create');
    }
    public function ShowAllCvCreated(){
        $cvs=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.user_id','=',auth()->id())
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday')
        ->get();
        return view('Cv.index',compact('cvs'));
    }

    public function showResume($id){
        $cv=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.id',$id)
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday')
        ->first();
        return view('Cv.Resume',compact('cv'));
    }
    public function downloadResume($id){
        $cv=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.id',$id)
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday')
        ->first();
        $html=view('Cv.Resume',compact('cv'));
        $pdf=new Dompdf();
        $pdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $pdf->setPaper('A4', 'Landscape');

        // Render the HTML as PDF
        $pdf->render();

        // Output the generated PDF to Browser
        $pdf->stream('result.pdf');
    }
}
