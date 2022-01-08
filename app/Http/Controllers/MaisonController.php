<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaisonController extends Controller
{
    public function index() 
    {
        return view('maison');
    }
}
