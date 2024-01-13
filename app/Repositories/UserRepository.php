<?php  
namespace App\Repositories;

use App\Models\User;

class UserRepository{

    public function __construct(
        public $model = User::class
    ) {
    }

    public function findAll(){
        return $this->model::query()
                    ->latest('id')
                    ->get();
    }
}