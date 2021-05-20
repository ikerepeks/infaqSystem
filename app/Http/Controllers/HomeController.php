<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('user.home',compact('student', 'numStudent','totalamount'));
    }

    public function profile(){
        $user = auth()->user();
        return view('user.profile',compact('user'));
    }

    public function update(User $user){
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'prefix' => 'required',
        ]);

        $user->name = request()->input('name');
        $user->email = request()->input('email');
        $user->prefix = request()->input('prefix');
        $user->save();

        return redirect('/student/profile');
    }

}
