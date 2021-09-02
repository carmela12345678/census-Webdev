<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    Function landing(){
        return view('admin/landing');
    }

    Function home(){
        return view('admin/welcomeAdmin');
    }
    Function userLanding(){
        return view('user/welcomeUser');
    }

}
