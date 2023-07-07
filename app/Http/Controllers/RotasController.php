<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RotasController extends Controller
{
    function rota_raiz()
    {
        if (Auth::user() && Auth::user()->admin === 1) {
            return view('admin');
        } else {
            return view('login-cad');
        }
    }
    function rota_cad_user()
    {
        if (Auth::user()) {

        } else {

            return view('cad');
        }
    }
}