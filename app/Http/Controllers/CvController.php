<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
//use PDF;
use App\Models\CandidateApply;
use App\Models\MessagesFromEmployers;
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
        // $pdf = PDF::loadView('Cv.Resume',compact('cv'));
        // return $pdf->download('invoice.pdf');
            $pdf=new Dompdf();
            $pdf->loadHtml($html);
            // (Optional) Setup the paper size and orientation
            $pdf->setPaper('A4', 'Landscape');

            // Render the HTML as PDF
            $pdf->render();

            // Output the generated PDF to Browser
            $pdf->stream('result.pdf');
    }
    public function apply_job(Request $request){
        if($request->isMethod('POST')){
            $candidate_apply= new CandidateApply();
            $candidate_apply->email = $request->input('email');
            $candidate_apply->phone=$request->input('phone');
            $candidate_apply->introduction=$request->input('candidate_introduction');
            $candidate_apply->job_id=$request->input('job_id');
            $candidate_apply->user_id=auth()->id();
            $candidate_apply->cv_id=$request->input('resume');
            $candidate_apply->save();
            return back();
        }
    }

    public function show_messages(){
        $messages=DB::table('messages_from_employers')
        ->join('users','users.id','=','messages_from_employers.user_id')
        ->join('user_companies','user_companies.id','=','company_id')
        ->where('messages_from_employers.user_id','=',auth()->id())
        ->select('messages_from_employers.*','user_companies.name')
        ->get();
        return view('users.messages_from_employer',compact('messages'));
    }
    public function show_messages_detail($id){
        $message=DB::table('messages_from_employers')
        ->join('users','users.id','=','messages_from_employers.user_id')
        ->join('user_companies','user_companies.id','=','company_id')
        ->where('messages_from_employers.user_id','=',auth()->id())
        ->where('messages_from_employers.id','=',$id)
        ->select('messages_from_employers.*','user_companies.name')
        ->first();
        return view('users.messages_details',compact('message'));
    }
    public function delete_message($id){
        $message=MessagesFromEmployers::find($id);
        $message->delete();
        return redirect()->back();
    }
}
