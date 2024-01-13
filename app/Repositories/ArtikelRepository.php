<?php 
namespace App\Repositories;

use App\Models\Artikel;

class ArtikelRepository{
    public function __construct(
        public $model = Artikel::class
    ){}

    public function create(array $request){
        return $this->model::create($request);
    }
    public function read(){
        return $this->model::all();
    }
    public function readById($id){
        return $this->model::find($id);
    }
}
