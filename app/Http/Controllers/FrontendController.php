<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job as Job;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with(['user','type'])->get();

        return view('welcome')->with(['jobs' => $jobs]);
    }
}
