<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
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
        $jobsdata = DB::table('jobs')
        ->join('provinces','jobs.province_id','=','provinces.id')
        ->join('users','jobs.created_by','=','users.id')
        ->join('user_companies','user_companies.user_id','=','users.id')
        ->orderBy('jobs.update_on','desc')
        ->select('jobs.*','provinces.name as location','user_companies.name')
        ->take(10)
        ->get();
        // $result = (array) json_decode($jobsdata);
        return view('home.mainpage',compact('jobsdata'));
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
    public function show($id)
    {
        //
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
