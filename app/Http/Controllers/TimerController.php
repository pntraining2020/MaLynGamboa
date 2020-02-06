<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timer;
use App\Users;

class TimerController extends Controller
{ 
    public function users(Request $request){
        $users = Users::all();
        return view('welcome',['users'=>$users]);
    }

    public function clockin(Request $request)
    {
        

    }

}
