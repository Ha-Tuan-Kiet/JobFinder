<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Province;
use App\Models\UserCompany;
use App\Models\User;
use App\Models\Career;
use App\Models\SaveJob;
use Illuminate\Support\Facades\DB;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $jobsdata=Job::with('careers')->get();
        // dd($jobsdata);
        $jobsdata = DB::table('jobs')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->paginate(5);
        // $jobsdata=Job::with('careers','province','user','usercompany')->paginate(5);      
        $careerdata=DB::table('careers')
        ->join('jobs','jobs.career_id','=','careers.id')
        ->select('careers.id','careers.name', DB::raw('count(*) as count_name'))
        ->groupBy('careers.name','careers.id')
        ->get();

        //Search
        $provinces =Province::all();

            // $careerdata=Job::with('careers')->get()->groupBy('careers.id','careers.name')->get()->dd();
        return view('home.mainpage',compact('jobsdata','provinces','careerdata'));
        // $data=Job::all();
        // return view('home.mainpage',['jobs'=>$data]);
    }
    //Paginate
    public function paginate_data(Request $request){
        if($request->ajax()){
            $jobsdata=DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->paginate(5);
            return view('home.jobs',compact('jobsdata'));
        }
    }
    //Paginate+Filter
   public function fetch_data(Request $request){
       $brand=$request->get('brand');
       $location=$request->get('location');
       $salary=explode(',',$request->get('salary'));
       $min_salary=$salary[0];
       $max_salary=$salary[1];
       if($request->ajax()){
        if($request->brand!=''&&$request->location =='' ||$request->salary =='' ){
           $jobsdata=DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->whereIn('jobs.job_type',explode(',',$brand))
           ->where('jobs.salary_min','>=',$min_salary)
           ->where('jobs.salary_max','<=',$max_salary)
           ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
        }
        if($request->location!='' &&$request->brand =='' ||$request->salary ==''){

           $jobsdata= DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->where('provinces.name','=',$location)
           ->where('jobs.salary_min','>=',$min_salary)
           ->where('jobs.salary_max','<=',$max_salary)
           ->paginate(5);
           return view('home.jobs',compact('jobsdata'))->render();
        }
        if($request->salary!='' &&$request->brand =='' &&$request->location ==''){
           $jobsdata= DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->where('jobs.salary_min','>=',$min_salary)
           ->where('jobs.salary_max','<=',$max_salary)
           ->paginate(5);
           return view('home.jobs',compact('jobsdata'))->render();
        }
        if($request->brand != '' && $request->location != '' &&$request->salary != ''){
            
           $jobsdata=DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->whereIn('jobs.job_type',explode(',',$brand))
           ->where('provinces.name','=',$location)
           ->where('jobs.salary_min','>=',$min_salary)
           ->where('jobs.salary_max','<=',$max_salary)
           ->paginate(5);
         
           return view('home.jobs',compact('jobsdata'))->render();
        }
        else{
           $jobsdata=DB::table('jobs')
           ->join('careers','jobs.career_id','=','careers.id')
           ->join('provinces','jobs.province_id','=','provinces.id')
           ->join('users','jobs.created_by','=','users.id')
           ->join('user_companies','jobs.company_id','=','user_companies.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->paginate(5);
           return view('home.jobs', compact('jobsdata'))->render();
        }
    }
  
   }
   //Filter
   public function filter_jobs(Request $request){
       $location=$request->location;
       $salary=explode(',',$request->salary);
       $min_salary=$salary[0];
       $max_salary=$salary[1];
     if($request->ajax()){
         if($request->brand!=''&&$request->location =='' ||$request->salary =='' ){

            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->whereIn('jobs.job_type',explode(',',$request->brand))
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->paginate(5);
             return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->location!='' &&$request->brand =='' ||$request->salary ==''){

            $jobsdata= DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->where('provinces.name','=',$location)
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->salary!='' &&$request->brand =='' &&$request->location ==''){
            $jobsdata= DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->brand != '' && $request->location != '' &&$request->salary != ''){
             
            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->whereIn('jobs.job_type',explode(',',$request->brand))
            ->where('provinces.name','=',$location)
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->paginate(5);
          
            return view('home.jobs',compact('jobsdata'))->render();
         }
         else{
            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->paginate(5);
            return view('home.jobs', compact('jobsdata'))->render();
         }
    }
   }


   //Filter detail
   public function filter_job_detail(Request $request){
    $location=$request->location;
       $salary=explode(',',$request->salary);
       $min_salary=$salary[0];
       $max_salary=$salary[1];
       $career_id=$request->careerid;
     if($request->ajax()){
         if($request->brand!=''&&$request->location =='' ||$request->salary =='' && $career_id !='' ){

            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->where('careers.id',$career_id)
            ->whereIn('jobs.job_type',explode(',',$request->brand))
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->paginate(5);
             return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->location!='' &&$request->brand =='' ||$request->salary =='' && $career_id !=''){

            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->where('provinces.name','=',$location)
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->where('careers.id',$career_id)
            ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->salary!='' &&$request->brand =='' &&$request->location =='' && $career_id !=''){
            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->where('careers.id',$career_id)
            ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
         }
         if($request->brand != '' && $request->location != '' &&$request->salary != '' && $career_id !=''){
             
            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->whereIn('jobs.job_type',explode(',',$request->brand))
            ->where('provinces.name','=',$location)
            ->where('jobs.salary_min','>=',$min_salary)
            ->where('jobs.salary_max','<=',$max_salary)
            ->where('careers.id',$career_id)
            ->paginate(5);
          
            return view('home.jobs',compact('jobsdata'))->render();
         }
         else{
            $jobsdata=DB::table('jobs')
            ->join('careers','jobs.career_id','=','careers.id')
            ->join('provinces','jobs.province_id','=','provinces.id')
            ->join('users','jobs.created_by','=','users.id')
            ->join('user_companies','jobs.company_id','=','user_companies.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
            ->paginate(5);
            return view('home.jobs', compact('jobsdata'))->render();
         }
    }
   }
   //Paginate +Filter Detail
   public function fetch_data_detail(Request $request){
    $brand=$request->get('brand');
    $location=$request->get('location');
    $salary=explode(',',$request->get('salary'));
    $min_salary=$salary[0];
    $max_salary=$salary[1];
    $career_id=$request->get('careerid');
    if($request->ajax()){
     if($request->brand!=''&&$request->location =='' ||$request->salary =='' && $career_id !=''){
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->whereIn('jobs.job_type',explode(',',$brand))
        ->where('jobs.salary_min','>=',$min_salary)
        ->where('jobs.salary_max','<=',$max_salary)
        ->where('careers.id',$career_id)
        ->paginate(5);
         return view('home.jobs',compact('jobsdata'))->render();
     }
     if($request->location!='' &&$request->brand =='' ||$request->salary =='' && $career_id !=''){

        $jobsdata= DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->where('provinces.name','=',$location)
        ->where('jobs.salary_min','>=',$min_salary)
        ->where('jobs.salary_max','<=',$max_salary)
        ->where('careers.id',$career_id)
        ->paginate(5);
        return view('home.jobs',compact('jobsdata'))->render();
     }
     if($request->salary!='' &&$request->brand =='' &&$request->location =='' && $career_id !=''){
        $jobsdata= DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->where('jobs.salary_min','>=',$min_salary)
        ->where('jobs.salary_max','<=',$max_salary)
        ->where('careers.id',$career_id)
        ->paginate(5);
        return view('home.jobs',compact('jobsdata'))->render();
     }
     if($request->brand != '' && $request->location != '' &&$request->salary != '' && $career_id !=''){
         
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->whereIn('jobs.job_type',explode(',',$brand))
        ->where('provinces.name','=',$location)
        ->where('jobs.salary_min','>=',$min_salary)
        ->where('jobs.salary_max','<=',$max_salary)
        ->where('careers.id',$career_id)
        ->paginate(5);
      
        return view('home.jobs',compact('jobsdata'))->render();
     }
     else{
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->where('careers.id',$career_id)
        ->paginate(5);
        return view('home.jobs', compact('jobsdata'))->render();
     }
 }
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showDetail($id,$eventid)
    {
        $jobsdata = DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->where('jobs.id',$id)
        ->where('jobs.career_id',$eventid)
        ->orderBy('jobs.updated_at','desc')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo','user_companies.contact_name','user_companies.website','user_companies.email_company','user_companies.detail as company_detail','careers.name as career_name')
        ->first();
        $cvs=DB::table('cvs')
        ->where('cvs.user_id','=',auth()->id())
        ->where('cvs.career_id','=',$eventid)
        ->select('cvs.*')
        ->get();
        // $save_job=SaveJob::where('job_id',$id)->count();
        // $user_id=SaveJob::where('user_id',auth()->id())->exists();
        $user_save_data=DB::table('save_jobs')
        ->where('user_id','=',auth()->id())
        ->where('job_id',$id)
        ->count();
        return view('home.jobdetails',compact('jobsdata','cvs','user_save_data'));
    }
    
    //CARRERS
    public function showAllCareers(){
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->paginate(5);
        $jobtypes=Job::select('job_type')->distinct()->get()->pluck('job_type')->sort();
        $job_salary_min=Job::select('salary_min')->distinct()->get()->pluck('salary_min')->sort();
        $job_salary_max=Job::select('salary_max')->distinct()->get()->pluck('salary_max')->sort();
        $joblocation=Province::select('name')->distinct()->get()->pluck('name')->sort();
        return view('home.findalljob',compact('jobsdata','jobtypes','joblocation','job_salary_min','job_salary_max'));
    }
    public function showDetailCareers($id){
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','jobs.company_id','=','user_companies.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->where('careers.id',$id)
        ->paginate(5);

        $jobtypes=Job::select('job_type')->distinct()->get()->pluck('job_type')->sort();
        $job_salary_min=Job::select('salary_min')->distinct()->get()->pluck('salary_min')->sort();
        $job_salary_max=Job::select('salary_max')->distinct()->get()->pluck('salary_max')->sort();
        $joblocation=Province::select('name')->distinct()->get()->pluck('name')->sort();
        $careerintro=Career::where('id',$id)->first();
        return view('home.findajob',compact('jobsdata','careerintro','jobtypes','joblocation','job_salary_min','job_salary_max'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
