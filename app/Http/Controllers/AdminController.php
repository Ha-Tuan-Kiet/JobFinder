<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\UserCompany;
use App\Models\User;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
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
}
