<?php 
namespace App\Services;
use App\Repositories\ArtikelRepository;
use Illuminate\Support\Facades\Storage;

class ArtikelService{
    public function __construct(
        public $artikel = new ArtikelRepository
    ){}
    public function create(array $request){
        $upload = Storage::put('image',$request['photo']);
        $request['photo'] = "storage/{$upload}";

        return $this->artikel->create($request);
    }

    public function read(){
       $posts =  $this->artikel->read();
       foreach ($posts as $post) {
        $post->content = substr($post->content, 0, 100);
        }
        return $posts;
    }

    public function readById($id){
        return $this->artikel->readById($id);
    }
}