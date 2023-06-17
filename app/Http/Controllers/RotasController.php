<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RotasController extends Controller
{
    function rota_raiz(){
        if(Auth::user()){
            
        }else{
            return view('login-cad');
        }
    }
}
