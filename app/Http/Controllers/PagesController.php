<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index') -> with('title', "Home");
    }

    public function create(){
        return view('pages/create') -> with('title', "Create Links");
    }
}
