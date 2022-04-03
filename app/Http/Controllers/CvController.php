<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
//use PDF;
use App\Models\CandidateApply;
use App\Models\MessagesFromEmployers;
use App\Models\Career;
use App\Models\SaveJob;
use Toastr;
class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CvCreate()
    {
        $career_id= Career::all();
       return view('Cv.create',compact('career_id'));
    }

    public  function create(Request $request){
//        $request->validate([
//            'phone'=>'required',
//           'email'=>'reqired',
//            'gender'=>'required',
//            'position_apply'=>'required',
//            'education'=>'required'
//        ]);

        if($request->isMethod("POST")){
            $cv= new Cv();
            $cv->user_id=auth()->id();
            $cv->title=$request->input('title');
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
            $cv->status=0;
            $cv->career_id=$request->input('career_id');
            $cv->save();
        }
        return redirect()->route('/Cv/ShowAllCv');
    }
    public function edit($id)
    {
        $cv = Cv::find($id);
        $career_id= Career::all();
        return View('Cv.edit',compact('cv','career_id')  );
    }
    public function update(Request $request,$id)
    {
        if($request->isMethod("POST")){
            $cv= Cv::find($id);
            $cv->user_id=auth()->id();
            $cv->title=$request->input('title');
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
            $cv->status=0;
            $cv->career_id=$request->input('career_id');
            $cv->save();
        }
        return redirect()->route('/Cv/ShowAllCv');
    }

    public function ShowAllCvCreated(){
        $cvs=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.user_id','=',auth()->id())
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday')
        ->paginate(5);
        return view('Cv.index',compact('cvs'));
    }

    public function showResume($id){
        $cv=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.id',$id)
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday','profiles.avatar')
        ->first();
        return view('Cv.Resume',compact('cv'));
    }
    public function downloadResume($id){
        $cv=DB::table('cvs')
        ->join('profiles','cvs.user_id','=','profiles.user_id')
        ->where('cvs.id',$id)
        ->select('cvs.*','profiles.full_name','profiles.address','profiles.birthday','profiles.avatar')
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
            if(!CandidateApply::where([
                ['cv_id',request('resume')],
                ['job_id',request('job_id')],
                ])->exists())
            {
                $candidate_apply=new CandidateApply();
                $candidate_apply->email = $request->input('email');
                $candidate_apply->phone=$request->input('phone');
                $candidate_apply->introduction=$request->input('candidate_introduction');
                $candidate_apply->job_id=$request->input('job_id');
                $candidate_apply->user_id=auth()->id();
                $candidate_apply->cv_id=$request->input('resume');
                $candidate_apply->company_id=$request->input('company_id');
                $candidate_apply->save();
                return back()->with('success','You success to applied this job.');
            }
            else{
              return back()->with('message','Sorry it resume already applied.');
            }
        }
    }

    public function show_messages(){
        $messages=DB::table('messages_from_employers')
        ->join('users','users.id','=','messages_from_employers.user_id')
        ->join('user_companies','user_companies.id','=','company_id')
        ->where('messages_from_employers.user_id','=',auth()->id())
        ->select('messages_from_employers.*','user_companies.name')
        ->paginate(5);
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
    public function delete_resume($id)
    {
        $cv= Cv::find($id);
        $cv->delete();
        return back();
    }
    public function applied_job(){
        $candidates=DB::table('candidate_applies')
        ->join('jobs','jobs.id','=','candidate_applies.job_id')
        ->join('users','users.id','=','candidate_applies.user_id')
        ->join('profiles','profiles.user_id','=','candidate_applies.user_id')
        ->join('user_companies','user_companies.id','=','candidate_applies.company_id')
        ->join('cvs','cvs.id','=','candidate_applies.cv_id')
        ->where('candidate_applies.user_id','=',auth()->id())
        ->select('candidate_applies.*','jobs.position','users.name','user_companies.name as company_name')
        ->paginate(5);
        return view('users.job_applied',compact('candidates'));
    }
    public function applied_job_detail($id){
        $candidate=DB::table('candidate_applies')
        ->join('jobs','jobs.id','=','candidate_applies.job_id')
        ->join('users','users.id','=','candidate_applies.user_id')
        ->join('profiles','profiles.user_id','=','candidate_applies.user_id')
        ->join('cvs','cvs.id','=','candidate_applies.cv_id')
        ->where('candidate_applies.id',"=",$id)
        ->select('candidate_applies.*','jobs.position','users.name','profiles.full_name')
        ->first();
        return view('users.job_applied_detail',compact('candidate'));
    }
    public function cancel_job_applied($id){
        $candidate=CandidateApply::find($id);
        $candidate->is_applying=0;
        $candidate->save();
        return redirect()->back();
    }
    //User favorite Job
    public function add_favorite_job($id){
        $user_save_data=DB::table('save_jobs')
        ->where('user_id','=',auth()->id())
        ->where('job_id',$id)
        ->count();
        if($user_save_data ==0 ){
            $add_job=new SaveJob();
            $add_job->job_id=$id;
            $add_job->user_id=auth()->id();
            $add_job->save();
            return redirect()->back()->with('add','You saved it to favorite job list');
        }
        else{
            $remove_job=SaveJob::where([
                ['job_id',$id],
                ['user_id',auth()->id()]
            ]);
            $remove_job->delete();
            return redirect()->back()->with('remove','You successed to remove it from favorite job list');
        }
    }
    //Show favorite Job
    public function show_favorite_job(){
        $favorite_jobs=DB::table('save_jobs')
        ->join('jobs','jobs.id','=','save_jobs.job_id')
        ->join('users','users.id','=','save_jobs.user_id')
        ->join('user_companies','user_companies.id','=','jobs.company_id')
        ->join('provinces','provinces.id','=','jobs.province_id')
        ->where('save_jobs.user_id',auth()->id())
        ->select('save_jobs.created_at','jobs.*','user_companies.name as company_name','user_companies.image_logo','provinces.name as location')
        ->paginate(5);
        return view('users.favorite_job',compact('favorite_jobs'));
    }
    //Delete favorite job
    public function delete_favorite_job($id){
        $favorite_job=SaveJob::where([
            ['job_id',$id],
            ['user_id',auth()->id()]
        ]);
        $favorite_job->delete();
        return redirect()->back();
    }
    //Show email response
    public function show_email_response($id){
        $message=DB::table('messages_from_employers')
        ->join('users','users.id','=','messages_from_employers.user_id')
        ->join('user_companies','user_companies.id','=','company_id')
        ->join('candidate_applies','candidate_applies.id','=','messages_from_employers.candidate_id')
        ->where('messages_from_employers.user_id','=',auth()->id())
        ->where('messages_from_employers.candidate_id','=',$id)
        ->select('messages_from_employers.*','user_companies.name')
        ->first();
        return view('users.messages_details',compact('message'));
    }
}
