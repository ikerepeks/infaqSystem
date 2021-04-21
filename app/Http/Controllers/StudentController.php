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

        return redirect('/home');
    }

    public function update(Student $student){
        $data = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'validity' => 'required',
            'amount' => 'required',
        ]);

        $task = Student::find($student->id);
        $task-> name = $request->name;
        $task-> phone = $request->phone;
        $task-> validity = $request->validity;
        $task-> amount = $request->amount;
        $task->save();
        return redirect()->back();
    }

    public function edit(Student $student){
        return view('edit',compact('student'));
    }

    public function manage(){
        $student = \App\Models\Student::all();
        return view('manage',compact('student'));
    }

    public function destroy(Student $student){
        $task = Student::find($student->id);
        $task->delete();

        return redirect('/student/manage');
    }
}
