<?php

use App\Helpers\Aritmatika;
use App\Helpers\DataKeeper;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\App;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(ArtikelController::class)
->group(function(){
    Route::get('/','list');
    Route::get('/home','list');
});

// TUGAS 10
Route::view('content-form','content-upload');
Route::post('post-content-upload',[ArtikelController::class,'upload']);

// MATERI 10

// Route::view('file-upload','file-upload');
// Route::post('post-file-upload',function(Request $request){
    // $upload = Storage::put('image',$request->profile);
    // return asset("storage/{$upload}");
// });

// Route::get('repository',function(UserRepository $userRepository){
//     return $userRepository->findAll();
// });

// Route::get('service',function(UserService $userService){
//     return $userService->findAll();
// });

// MATERI 9

// Route::get('/hash',function(){
//     $password = "123456";
//     $encryptedPassword = Hash::make($password);
//     return [
//         'encryptedPassword'=>$encryptedPassword,
//         'CHECK' => Hash::check('123456',$encryptedPassword)
//     ];
// });

// Route::get('/encrypt',function(){
//     $plainText = 'Selamat pagi';
//     $encrypted = encrypt($plainText);
//     $decrypted = decrypt($encrypted);

//     return [
//         'plainText' => $plainText,
//         'encrypted' => $encrypted,
//         'decrypted' => $decrypted
//     ];
// });

// TUGAS 7

// Route::get('/login',[LoginController::class,'index'])->middleware('guest');
// Route::post('/login',[LoginController::class,'authenticate']);
// Route::post('/logout',[LoginController::class,'logout']);

// Route::get('/profile',[ProfileController::class,'index'])->middleware('auth-middleware');

// TUGAS 8

Route::get('/localization/{locale}',function($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);

    return redirect()->back();
});

Route::controller(ArtikelController::class)
    ->prefix('artikel')
    ->middleware(['setlocale'])
    ->group(function(){
        Route::get('/list','list');
        Route::get('/detail/{id}','detail');
    });


// Route::get('/home/beranda', function () {
//     return "WElCOME TO HOME";
// });

// Route::controller(UserController::class)
// ->prefix("users")
// ->group(function () {
//     Route::get("/","index");
//     Route::get("/create","create");
//     Route::get("/update","update");
//     Route::get("/delete","delete");
// });


// Route::controller(MahasiswaController::class)
// ->prefix("mahasiswa")
// ->group(function () {
//     Route::get("/","index");
//     Route::get("/create","create");
//     Route::get("/update","update");
//     Route::get("/delete","delete");
// });

// Route::get('/helper',function(){
// if(session('errors'))
// {
//     return session('errors');
// }
//     return sumNumber(3,7);
// });

// Route::get('/tes',function(Request $request){
//     $request->validate([
//         'user_id' => 'required',
//         'email' => 'required|email'
//     ]);

//     return $request->all();
// });

// Route::get('/auth',function(){
//     return "PROFILE";
// })->middleware('auth-middleware');

// TUGAS 6

// Route::get('/register',function(){
//     return view('register');
// });

// Route::post('/register',function(Request $request){
//     $req = $request->validate([
//         'name' => 'required',
//         'email' => 'required|email',
//         'birth_date' => 'required|date',
//         'password' => 'required'
//     ]);

//     DataKeeper::saveData($req);
//     $data = DataKeeper::showData();
//     session(['user'=>$data[0]['name']]);

//     $access_token = date('Y-m-d');
//     return redirect('home?access_token='.$access_token);
// });

// Route::get('/home',function(){
//     $user = session('user');
//     return view('beranda.home',['user'=>$user]);
// })->middleware('access-token');


// PERTEMUAN 7
// Route::get('/set-session',[SessionController::class,'set']);
// Route::get('/get-session',[SessionController::class,'get']);



// MATERI 8

// Route::get('/localization/{bahasa}',function($bahasa){
//     App::setLocale($bahasa);
// return __('welcome');
// });



