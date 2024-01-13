<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(
        private UserRepository $userRepository
    ){}

    public function index(){
        $this->userRepository->findAll();
        // $listUser = User::query()
        //     ->select("id","name","phone","email","address")
        //     ->latest("id")
        //     ->get();

// QUERY BUILDER (QB)
$listUser = DB::table("users")
->select("id","name","phone","email","address")
        //     ->latest("id")
->get();

            return $listUser;
    }
    public function create(){
        // User::create([
        //     "name"=> "Atha Renata",
            // "password"=> "123",
            // "phone"=> "088728278",
            // "email"=> "atharenata1@gmail.com",
            // "address"=> "Semarang",
        // ]);

        // QB
        DB::table("users")
        ->insert([
            "name"=> "Lala",
            "password"=> Hash::make('123'),
            "phone"=> "082718728",
            "email"=> "lala99@gmail.com",
            "address"=> "Semarang",
        ]);
        return 'CREATE';

    }
    public function update(){
        // User::query()
            // ->where('id','=','1')
            // ->update([
            //     'name' => 'Rein'
            // ]);

        // QB
        DB::table('users')
        ->where('id','=','2')
            ->update([
                'name' => 'Bubud'
            ]);

        //tugas : migration, controller elequent, controller query builder
        return 'UPDATE';
    }
    public function delete(){

    }
}
