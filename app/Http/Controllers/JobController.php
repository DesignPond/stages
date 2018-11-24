<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job as Job;

class JobController extends Controller
{
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $valid_until = \Carbon\Carbon::createFromFormat('d.m.Y', $request->input('valid_until'))->toDateString();

         Job::create([
             'user_id'     => \Auth::user()->id,
             'title'       => $request->input('title'),
             'description' => $request->input('description'),
             'valid_until' => $valid_until,
             'type_id'     => $request->input('type_id'),
             'remunere'    => 1
         ]);

         return redirect('/profil/jobs');
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.update')->with(['job' => $job]);
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($request->input('id'));

        if(!$job) { return false; }

        $valid_until = \Carbon\Carbon::createFromFormat('d.m.Y', $request->input('valid_until'))->toDateString();

        $job->title       = $request->input('title');
        $job->description = $request->input('description');
        $job->valid_until = $valid_until;
        $job->type_id     = $request->input('type_id');

        $job->save();

        return redirect('/profil/jobs');
    }

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('/profil/jobs');
    }
}
