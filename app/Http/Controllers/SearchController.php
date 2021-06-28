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
        $search_province =$request->input('provinces');
        // $jobs=Job::where('position','LIKE','%'.$search_company.'%')->with(['careers','province'=>function($query)use($search_province){
        //     $query->where('name','LIKE','%'.$search_province.'%')
        //         ->orWhere('name','=','');
        // },'user','usercompany'])->get();

        $jobsdata=Job::with('careers','province','user','usercompany')
        ->where('position','LIKE','%'.$search_company.'%')
        ->where('province_id','=',$search_province)
        ->paginate(5)
        ->appends(request()->query());
        // $companies=UserCompany::where('name','LIKE','%'.$search_province.'%');
        // $job=$companies->Job::where('position','LIKE','%'.$search_company.'%')->with(['careers','province','user','usercompany'])->get()->dd();

        // $job=Job::query();
        // if($request->filled('position')){
        //     $job->where('position',$request->position);
        // }
        return view('home.search',compact('jobsdata'));
    }
}
