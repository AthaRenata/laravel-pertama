<?php 
namespace App\Services;
use App\Repositories\UserRepository;

class UserService{
    public function __construct(
        public $repository = new UserRepository
    ){}
    
    public function findAll(){
        $data = $this->repository->findAll();
        foreach($data as $row){
            $row->date = date('Y-m-d H:i:s',strtotime($row->created_at));   
            $row->email_address = "email@email.com Semarang";
        }

        return $data;
    }
}