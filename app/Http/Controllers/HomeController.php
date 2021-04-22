<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $student = auth()->user()->student;
        $numStudent = auth()->user()->student()->count();
        $totalamount = auth()->user()->student()->sum('amount');
        return view('home',compact('student', 'numStudent','totalamount'));
    }

    public function store()
    {   
        $csv = request()->file('csv');
        $path = $csv->store('csvsubmit');
        return view('welcome');
    }
}
