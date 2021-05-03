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
    public function index()
    {
        // $query= "SELECT jobs.*, provinces.name, user_companies.name FROM jobs, provinces, user_companies, users
        // WHERE jobs.province_id = provinces.id 
        // AND jobs.created_by = users.id
        // AND user_companies.user_id = users.id
        // AND jobs.is_active = 1
        // ORDER BY jobs.update_on DESC
        // LIMIT 6";

        // $jobsdata=Job::with('careers')->get();
        // dd($jobsdata);
        $jobsdata = DB::table('jobs')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->orderBy('jobs.update_on','desc')
        ->select('jobs.*','provinces.name as location','user_companies.name','user_companies.image_logo')
        ->get();

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
        $careerdata=Job::with('careers','province','user','usercompany')->get();
                   
        return view('home.findalljob',compact('careerdata'));
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
