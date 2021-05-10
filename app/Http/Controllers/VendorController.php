<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    public function index()
    {   
        $transaction = auth('vendor')->user()->transaction;
        $totalamount = auth('vendor')->user()->transaction()->sum('amount');
        return view('vendor.vendor',compact('transaction','totalamount'));
    }
}
