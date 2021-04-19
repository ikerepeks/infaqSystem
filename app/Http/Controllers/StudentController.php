<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'validity' => 'required',
            'amount' => 'required',
        ]);

        $count = count($request->name);

        for ($i=0; $i < $count; $i++){
            $task = new Student();
            $task-> name = $request->name[$i];
            $task-> phone = $request->phone[$i];
            $task-> validity = $request->validity[$i];
            $task-> amount = $request->amount[$i];
            $task->save();
        }

        return redirect()->back();
    }
}
