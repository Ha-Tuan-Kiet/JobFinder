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
}
