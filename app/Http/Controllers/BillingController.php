<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function bill()
    {
        return view('billing');
    }
}
