<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function main(){
//        return User::all();
//        $setting = Setting::all()->keyBy('key');
        return view('main'
//            , ['setting'=>$setting]
        );
    }
    public  function aboutUs(){
        return view('about');
    }
    public  function weblog(){
        return view('weblog');
    }
    public  function post(){
        return view('single');
    }
}
