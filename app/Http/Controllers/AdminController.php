<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLibros(){
        return view('inicio');
    }
    public function getEditorial(){
        return view('inicio');
    }
}
