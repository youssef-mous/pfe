<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
   
     public function adminprf()
    {
        return view('adminprofile');
    }
    public function Formateurprf()
    {
        return view('formateur');
    }
    public function userprf(){
            return view('profile');
            }   
    public function editprof(){
        return view('editprofile');
    }
    public function billing(){
        return view('billing');
    }


    public function accestoprofil()
    {   
          
       
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.profil');
            }else if (auth()->user()->type == 'formateur') {
                return redirect()->route('formateur.profil');
            }else{
                return redirect()->route('user.profil');
            }
        
        
            
    }
}
