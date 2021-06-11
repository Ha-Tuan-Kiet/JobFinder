<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\UserCompany;
use App\Models\User;
use App\Models\Career;
use App\Models\MessagesFromEmployers;
use App\Models\CandidateApply;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function dashboard()
    {
        $jobsdata=DB::table('jobs')
        ->join('user_companies','user_companies.id','=','jobs.company_id')
        ->join('users','users.id','=','jobs.created_by')
        ->where('jobs.created_by',auth()->id())
        ->select('jobs.*','user_companies.image_logo','user_companies.name as company_name','users.name')
        ->get();
        return view('admin.dashboard',compact('jobsdata'));
    }
    public function postjob(Request $request)
    {
        $province=Province::all();
        $companies=UserCompany::all();
        $careers=Career::all();
        if($request->isMethod('post')){
            $jobsdata= new Job();
            $jobsdata->position = $request->input('position');
            $jobsdata->application_email = $request->input('application_email');
            $jobsdata->details = $request->input('details');
            $jobsdata->image =$request->file('image');
            $jobsdata->amount = $request->input('amount');
            $jobsdata->experience = $request->input('experience');
            $jobsdata->job_type = $request->input('jobtype_list');
            $jobsdata->salary_max= $request->input('salary_max');
            $jobsdata->salary_min =$request->input('salary_min');
            $jobsdata->salary_unit = $request->input('salary_unit');
            $jobsdata->address = $request->input('address');
            $jobsdata->work_time =$request->input('work_time');
            $jobsdata->deadline_for_submission=$request->input('due_to_apply');
            $jobsdata->requirement=$request->input('requirements');
            $jobsdata->education=$request->input('education');
            $jobsdata->created_by= auth()->id();
            $jobsdata->province_id=$request->input('province');
            $jobsdata->company_id=$request->get('company');
            $jobsdata->career_id=$request->get('career');
            $jobsdata->save();
        }
        return view('admin.postjob',compact('province','companies','careers'));
    }
    public function showJoblist(){
        $jobsdata=DB::table('jobs')
        ->join('user_companies','user_companies.id','=','jobs.company_id')
        ->join('users','users.id','=','jobs.created_by')
        ->where('jobs.created_by',auth()->id())
        ->select('jobs.*','user_companies.image_logo','user_companies.name as company_name','users.name')
        ->get();
        return view('admin.joblist',compact('jobsdata'));
    }
    public function editJob($id){
        $province=Province::all();
        $companies=UserCompany::all();
        $careers=Career::all();
        $jobsdata=DB::table('jobs')
        ->where('jobs.id',$id)
        ->select('jobs.*')
        ->first();
        return view('admin.editjob',compact('jobsdata','province','companies','careers'));
    }
    public function updateJob(Request $request,$id){
        $province=Province::all();
        $companies=UserCompany::all();
        $careers=Career::all();
        if($request->isMethod('post')){
                $jobsdata=Job::find($id);
                $jobsdata->position = $request->input('position');
                $jobsdata->application_email = $request->input('application_email');
                $jobsdata->details = $request->input('details');
                $jobsdata->image =$request->file('image');
                $jobsdata->amount = $request->input('amount');
                $jobsdata->experience = $request->input('experience');
                $jobsdata->job_type = $request->input('jobtype_list');
                $jobsdata->salary_max= $request->input('salary_max');
                $jobsdata->salary_min =$request->input('salary_min');
                $jobsdata->salary_unit = $request->input('salary_unit');
                $jobsdata->address = $request->input('address');
                $jobsdata->work_time =$request->input('work_time');
                $jobsdata->deadline_for_submission=$request->input('due_to_apply');
                $jobsdata->requirement=$request->input('requirements');
                $jobsdata->education=$request->input('education');
                $jobsdata->created_by= auth()->id();
                $jobsdata->province_id=$request->input('province');
                $jobsdata->company_id=$request->get('company');
                $jobsdata->career_id=$request->get('career');
                $jobsdata->save();
        }
        return view('admin.editjob',compact('jobsdata','province','companies','careers'));
    }
    public function deleteJob($id){
        $jobsdata=Job::find($id);
        $jobsdata->delete();
        return redirect()->back()->with('success', 'Deleted success');
    }

    //Job Application Managemenment
    public function job_application(){
        $candidates=DB::table('candidate_applies')
        ->join('jobs','jobs.id','=','candidate_applies.job_id')
        ->join('users','users.id','=','candidate_applies.user_id')
        ->join('profiles','profiles.user_id','=','candidate_applies.user_id')
        ->join('cvs','cvs.id','=','candidate_applies.cv_id')
        ->where('jobs.created_by','=',auth()->id())
        ->select('candidate_applies.*','jobs.position','users.name')
        ->get();
        return view('admin.job_application',compact('candidates'));
    }
    public function show_application_details($id){
        $candidate=DB::table('candidate_applies')
        ->join('jobs','jobs.id','=','candidate_applies.job_id')
        ->join('users','users.id','=','candidate_applies.user_id')
        ->join('profiles','profiles.user_id','=','candidate_applies.user_id')
        ->join('cvs','cvs.id','=','candidate_applies.cv_id')
        ->where('candidate_applies.id',"=",$id)
        ->where('jobs.created_by','=',auth()->id())
        ->select('candidate_applies.*','jobs.position','users.name','profiles.full_name')
        ->first();
        $employer_info=DB::table('users')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->where('users.id','=',auth()->id())
        ->select('users.email','user_companies.*')
        ->first();
        return view('admin.job_application_details',compact('candidate','employer_info'));
    }
    public function response_job_application(Request $request){
        $candidates=DB::table('candidate_applies')
        ->join('jobs','jobs.id','=','candidate_applies.job_id')
        ->join('users','users.id','=','candidate_applies.user_id')
        ->join('profiles','profiles.user_id','=','candidate_applies.user_id')
        ->join('cvs','cvs.id','=','candidate_applies.cv_id')
        ->where('jobs.created_by','=',auth()->id())
        ->select('candidate_applies.*','jobs.position','users.name')
        ->get();

        if($request->isMethod('POST')){
            $message_from_employer= new MessagesFromEmployers();
            $message_from_employer->company_id=$request->input('company_id');
            $message_from_employer->user_id=$request->input('user_id');
            $message_from_employer->title=$request->input('title');
            $message_from_employer->content=$request->input('content_response');
            $message_from_employer->save();
            $candidate=CandidateApply::find($request->input('id_for_update_status'));
            $candidate->is_active=1;
            $candidate->save();
            return back();
        }
        return view('admin.job_application',compact('candidates'));
    }
}
