<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    // ELOQUENT MODEL
    public function index(){
        $listMahasiswa = Mahasiswa::query()
        ->select("id","nama","nim","alamat","program_studi","semester")
        ->get();
        return $listMahasiswa;
    }

    public function create(){
        Mahasiswa::create([
            "nama"=>"Atha Renata",
            "nim"=>"12345678912",
            "alamat"=> "Wonodri Joho I, Semarang",
            "program_studi"=> "Informatika",
            "semester"=>"1"
        ]);
        return "CREATE";
    }
    
    public function update(){
        Mahasiswa::query()
        ->where("id","=","1")
        ->update([
            "nama"=>"Rian Tara",
            "nim"=>"98765432198",
            "alamat"=> "Singosari V, Semarang",
            "program_studi"=> "Akuntansi",
            "semester"=>"7"
        ]);
        return "UPDATE";
    }

    public function delete(){
        Mahasiswa::query()
        ->where("id","=","1")
        ->delete();
        return "DELETE";
    }

    //QUERY BUILDER
    // public function index(){
    //     $listMahasiswa = DB::table("mahasiswa")
    //     ->select("id","nama","nim","alamat","program_studi","semester")
    //     ->get();
    //     return $listMahasiswa;
    // }

    // public function create(){
    //     DB::table("mahasiswa")
    //     ->insert([
    //         "nama"=>"Budi Supardi",
    //         "nim"=>"54637281955",
    //         "alamat"=> "Kuningan, Jakarta",
    //         "program_studi"=> "Ekonomi",
    //         "semester"=>"4"
    //     ]);
    //     return "CREATE";
    // }
    
    // public function update(){
    //     DB::table("mahasiswa")
    //     ->where("id","=","2")
    //     ->update([
    //         "nama"=>"Mia Alisya",
    //         "nim"=>"19283746537",
    //         "alamat"=> "Kertajaya, Surabaya",
    //         "program_studi"=> "Kedokteran",
    //         "semester"=>"3"
    //     ]);
    //     return "UPDATE";
    // }

    // public function delete(){
    //     DB::table("mahasiswa")
    //     ->where("id","=","2")
    //     ->delete();
    //     return "DELETE";
    // }
}
