<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $query= "SELECT jobs.*, provinces.name, user_companies.name FROM jobs, provinces, user_companies, users
                      WHERE jobs.province_id = provinces.id 
                      AND jobs.created_by = users.id
                      AND user_companies.user_id = users.id
                      AND jobs.is_active = 1
                      ORDER BY jobs.update_on DESC
                      LIMIT 6";
         $result = $mysqli->query($query);
         $jobData = $result->fetch_all();
        return view('home');
    }
}
