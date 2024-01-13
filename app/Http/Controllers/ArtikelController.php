<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArtikelService;

class ArtikelController extends Controller
{
    public function __construct(
        private ArtikelService $artikelService
    ){}

    public function list(){
        return view('pages.list-artikel',['data'=>$this->artikelService->read()]);
        // return view('pages.list-artikel',[
        //     "id"=>"1",
        //     "title"=>"Pengertian Laravel Framework",
        //     "excerpt"=>"Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website..."
        // ]);
    }

    public function detail($id){
        return view('pages.detail-artikel',$this->artikelService->readById($id));
        // return view('pages.detail-artikel',[
        //     "img"=>"https://www.e-spincorp.com/wp-content/uploads/2020/06/laravel-php-framework.jpg",
        //     "title"=>"Pengertian Laravel Framework",
        //     "post"=>"<p>Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website.
        //     </p><p>
        //     PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel.
        //     </p><p>
        //     Setiap rilis versi terbaru, misalnya Laravel 9, framework ini selalu memunculkan teknologi baru di antara framework PHP lainnya.
        //     </p><p>
        //     Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia.
        //     </p><p>
        //     Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.
        //     </p><p>
        //     Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya “The PHP Framework For Web Artisans”. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity.</p>"
        // ]);
    }

    public function upload(Request $request){
        $req = $request->validate([
                    'photo' => 'required',
                    'title' => 'required',
                    'content' => 'required'
                ]);
        
        $this->artikelService->create($req);

        return redirect('artikel/list');
    }
}
