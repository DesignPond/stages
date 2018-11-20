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
        $cantons = $jobs->map(function ($job, $key) {
                return $job->user->canton->slug;
            })->unique();

        return view('welcome')->with(['jobs' => $jobs, 'cantons' => $cantons]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function canton($id, Request $request)
    {
        $canton = \App\Canton::where('slug','=',$id)->first();

        $jobs = Job::with(['user','type'])->whereHas('user', function ($query) use ($canton) {
            $query->where('users.canton_id', '=', $canton->id);
        })->get();

        if($request->ajax()){
             return view('listing')->with(['jobs' => $jobs, 'title' => $canton->title ])->render();
        }

        return view('canton')->with(['jobs' => $jobs, 'title' => $canton->title ]);
    }
}
