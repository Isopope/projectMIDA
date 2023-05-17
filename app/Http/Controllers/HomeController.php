<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function RedirigerVers(){
        $user_role=Auth::User()->user_role;

        if($user_role==='client'){
            return view('/dashboard');
        }else{
            return view('/adminview');
        }
    }
}
