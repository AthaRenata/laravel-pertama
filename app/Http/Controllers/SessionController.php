<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function set(Request $request){
        $name = $request->name;
        $value = $request->value;
        Session::put($name,$value);
    }

    public function get(Request $request){
        $name = $request->name;
        return Session::get($name);
    }
}
