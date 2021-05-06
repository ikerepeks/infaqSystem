<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Vendor;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return Student::all();
    }

    public function getStudent(Request $request){
        return Student::select('id','amount')->where('code', $request->code)->get();
    }

    public function authorized(Request $request){
        
        $data = Student::select('id','amount')->where('code', $request->code)->get();
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

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:vendors',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $vendor = Vendor::create($validatedData);

        $accessToken = $vendor->createToken('authToken')->accessToken;

        return response([ 'vendors' => $vendor, 'access_token' => $accessToken]);
    } 

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth('vendor')->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = auth('vendor')->user()->createToken('authToken')->accessToken;

        return response(['vendors' => auth('vendor')->user(), 'access_token' => $accessToken]);

    }

    
}
