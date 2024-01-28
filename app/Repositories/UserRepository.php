<?php  
namespace App\Repositories;

use App\Models\User;

class UserRepository{

    public function __construct(
        public $model = User::class
    ) {
    }

    public function create(array $data){
        return $this->model::create($data);
    }

    public function read(){
        return $this->model::all();
    }

    public function readById($id){
        return $this->model::find($id);
    }
    
    public function update($id, array $data){
        return $this->model::findOrFail($id)
                    ->update($data);
    }

    public function delete($id){
        return $this->model::findOrFail($id)
                    ->delete();
    }

    public function findAll(){
        return $this->model::query()
                    ->latest('id')
                    ->get();
    }
}