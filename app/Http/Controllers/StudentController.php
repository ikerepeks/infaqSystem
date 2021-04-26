<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('user.student');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'validity' => 'required',
            'amount' => 'required',
        ]);

        // $salt = random_bytes(9);
        // $code = "UITMZAKAT".$request->phone[$i].$salt;

        $count = count($request->name);
        
        for ($i=0; $i < $count; $i++){

            $salt = uniqid();
            $code = "UITMZAKAT".$request->phone[$i].$salt;
            $userid = auth()->user()->id;
            $task = new Student();
            $task-> name = $request->name[$i];
            $task-> phone = $request->phone[$i];
            $task-> validity = $request->validity[$i];
            $task-> amount = $request->amount[$i];
            $task -> code = $code;
            $task -> user_id = $userid;
            $task->save();
        }

        return redirect('/home');
    }

    public function update(Student $student){
        
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'validity' => 'required',
            'amount' => 'required',
        ]);

        $student-> name = request()->input('name');
        $student-> phone = request()->input('phone');
        $student-> validity = request()->input('validity');
        $student-> amount = request()->input('amount');
        $student->save();

        return redirect('/student/manage');
    }

    public function edit(Student $student){
        return view('edit',compact('student'));
    }

    public function manage(){
        $student = auth()->user()->student;
        return view('user.manage',compact('student'));
    }

    public function destroy(Student $student){
        $task = Student::find($student->id);
        $task->delete();

        return redirect('/student/manage');
    }
}
