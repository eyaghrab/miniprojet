<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function list_etudiant()
    {
        return view('eetudiant.liste');
    }
}
