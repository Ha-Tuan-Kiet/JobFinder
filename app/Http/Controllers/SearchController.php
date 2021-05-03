<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Province;
use App\Models\UserCompany;
use App\Models\User;
use App\Models\Career;
use Illuminate\Support\Facades\DB;
class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        
        $search_company =$_GET['company'];
        $search_province =$_GET['provinces'];
        // $jobs=Job::where('position','LIKE','%'.$search_company.'%')->with(['careers','province'=>function($query)use($search_province){
        //     $query->where('name','LIKE','%'.$search_province.'%')
        //         ->orWhere('name','=','');
        // },'user','usercompany'])->get();
        
        $jobs=DB::table('jobs')
        ->join('provinces','provinces.id','=','jobs.province_id')
        ->join('careers','careers.id','=','jobs.career_id')
        ->join('users','users.id','=','jobs.created_by')
        ->join('user_companies','user_companies.id','=','jobs.id')
        ->where('position','LIKE','%'.$search_company.'%')
        ->where('provinces.name','LIKE','%'.$search_province.'%')
        ->select('jobs.*','provinces.name as location','user_companies.name')
        ->get();

        // $job=Job::query();
        // if($request->filled('position')){
        //     $job->where('position',$request->position);
        // }
        return view('home.search',compact('jobs'));
    }
}
