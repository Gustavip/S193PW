<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{


    public function index()
    {
        return view('principal');
    }

    public function create()
    {
        return view('registro_libro');
    }

    public function store(Request $request)
    {
       

       

    }
}

