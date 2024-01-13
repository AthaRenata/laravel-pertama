<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        $userData = User::query()
        ->where('id','=',Session::get('id'))
        ->select("name","phone","email","address")
        ->first();
        return view('pages.profile',['userData'=>$userData]);
    }
}
