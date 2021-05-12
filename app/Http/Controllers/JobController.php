<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Province;
use App\Models\UserCompany;
use App\Models\User;
use App\Models\Career;
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
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->orderBy('jobs.update_on','desc')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->paginate(5);
        // $jobsdata=Job::with('careers','province','user','usercompany')->paginate(5);      
        $careerdata=DB::table('careers')
        ->join('jobs','jobs.career_id','=','careers.id')
        ->select('careers.id','careers.name', DB::raw('count(*) as count_name'))
        ->groupBy('careers.name','careers.id')
        ->get();

        //Search
        $provinces =Province::select('name')->distinct()->get()->pluck('name')->sort();

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
           ->join('user_companies','user_companies.user_id','=','users.id')
           ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
           ->paginate(5);
            return view('home.jobs',compact('jobsdata'))->render();
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
           ->join('user_companies','user_companies.user_id','=','users.id')
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
           ->join('user_companies','user_companies.user_id','=','users.id')
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
           ->join('user_companies','user_companies.user_id','=','users.id')
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
           ->join('user_companies','user_companies.user_id','=','users.id')
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
           ->join('user_companies','user_companies.user_id','=','users.id')
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
            ->join('user_companies','user_companies.user_id','=','users.id')
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
            ->join('user_companies','user_companies.user_id','=','users.id')
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
            ->join('user_companies','user_companies.user_id','=','users.id')
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
            ->join('user_companies','user_companies.user_id','=','users.id')
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
            ->join('user_companies','user_companies.user_id','=','users.id')
            ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
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

    public function showDetail($id)
    {
        $jobsdata = DB::table('jobs')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->where('jobs.id',$id)
        ->orderBy('jobs.update_on','desc')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->get();
        return view('home.jobdetails',compact('jobsdata'));
    }
    
    //CARRERS
    public function showAllCareers(){
        // $careerdata= DB::table('careers')
        // ->join('jobs','jobs.career_id','=','careers.id')
        // ->join('provinces','jobs.province_id','=','provinces.id')
        // ->join('users','jobs.created_by','=','users.id')
        // ->join('user_companies','user_companies.user_id','=','users.id')
        // ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo','jobs.id as job_id')
        // ->get();
        $jobsdata=DB::table('jobs')
        ->join('careers','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->paginate(5);
        $jobtypes=Job::select('job_type')->distinct()->get()->pluck('job_type')->sort();
        $job_salary_min=Job::select('salary_min')->distinct()->get()->pluck('salary_min')->sort();
        $job_salary_max=Job::select('salary_max')->distinct()->get()->pluck('salary_max')->sort();
        $joblocation=Province::select('name')->distinct()->get()->pluck('name')->sort();
        return view('home.findalljob',compact('jobsdata','jobtypes','joblocation','job_salary_min','job_salary_max'));
    }
    public function showDetailCareers($id){
        $careerdata= DB::table('careers')
        ->join('jobs','jobs.career_id','=','careers.id')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->where('careers.id',$id)
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo','jobs.id as job_id')
        ->get();

        // $careerintro=DB::table('careers')
        // ->where('careers.id',$id)
        // ->select('careers.name')
        // ->get();
        $careerintro=Career::where('id',$id)->get();
        return view('home.findajob',compact('careerdata'),compact('careerintro'));
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
