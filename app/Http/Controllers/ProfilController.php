<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.edit');
    }

    public function create()
    {
        return view('profil.create');
    }

    public function jobs()
    {
        return view('profil.jobs');
    }
}
