<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return Student::all();
    }

    public function getStudent($coupon){
        return Student::select('id','amount')->where('code', $coupon)->get();
    }

    public function authorized(Request $request, $coupon){
        
        $data = Student::select('id','amount')->where('code', $coupon)->get();
        if ($data->isEmpty()){
            return response()->json("Code does not exist", 400);
        }

        $total = $data[0]['amount'] - $request->amount;
        
        if ($total > 0){
            return response()->json("Transac Success", 200);
        } else {
            return response()->json("Balance Not Enough", 200);
        }


    }
}
