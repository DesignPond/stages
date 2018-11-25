<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UpdateRequest;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.edit');
    }

    public function update(UpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);

        if(!$user) { return false; }

        $user->fill($request->only(['name','email','rue','canton_id','npa','ville','telephone','fax','cp','complement','website','social']));
        $user->save();

        return redirect('/profil');
    }

    public function jobs()
    {
        return view('profil.jobs');
    }
}
