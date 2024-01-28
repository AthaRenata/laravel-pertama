<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\UserRepository;
use App\Http\Controllers\ApiController;

class ApiUserController extends ApiController
{

    public function __construct(
        private UserRepository $userRepository
    ){}

    public function index(Request $request)
    {
        $userList = $this->userRepository->read();
            
        if ($userList->isEmpty()) {
            $jsonResponse = $this->sendBadRequest('Data user kosong');
            $message = $jsonResponse->getData()->message;

            session()->flash('error_message', $message);
            return redirect('users/add');
        }else{
            $jsonResponse = $this->sendSuccess($userList);
        }

        $content = $jsonResponse->getContent();

        $data = json_decode($content);

        return view('pages.users.index',['jsonResponse'=>$data]);
    }

    public function show(Request $request, $id)
    {
        $user = $this->userRepository->readById($id);

        if ($user===null) {
            $jsonResponse = $this->sendBadRequest('Tidak ada pengguna yang ditemukan');
            $message = $jsonResponse->getData()->message;

            session()->flash('error_message', $message);
            return redirect('users');
        }else{
            $jsonResponse = $this->sendSuccess($user);
        }

        $content = $jsonResponse->getContent();

        $data = json_decode($content);

        return view('pages.users.edit',['jsonResponse'=>$data]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email:dns',
            'address' => 'required'
        ]);

        $qry = $this->userRepository->create($validatedData);

        if(!$qry){
            $jsonResponse = $this->sendBadRequest("User gagal ditambahkan");
            $message = $jsonResponse->getData()->message;
    
            session()->flash('error_message', $message);
        }else{
            $jsonResponse = $this->sendMessage("User berhasil ditambahkan");
            $message = $jsonResponse->getData()->message;
    
            session()->flash('success_message', $message);
        }

        return redirect('users');
        }else{
            return view('pages.users.create');
        }

    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email:dns',
            'address' => 'required'
        ]);

        $qry = $this->userRepository->update($id, $validatedData);

        if(!$qry){
            $jsonResponse = $this->sendBadRequest("Data gagal diubah");
            $message = $jsonResponse->getData()->message;
    
            session()->flash('error_message', $message);
        }else{
            $jsonResponse = $this->sendMessage("Data berhasil diubah");
            $message = $jsonResponse->getData()->message;
    
            session()->flash('success_message', $message);
        }

        return redirect('users');
    }

    public function destroy(Request $request, $id)
    {
        $qry = $this->userRepository->delete($id);

        if(!$qry){
            $jsonResponse = $this->sendBadRequest("Data gagal dihapus");
            $message = $jsonResponse->getData()->message;
    
            session()->flash('error_message', $message);
        }else{
            $jsonResponse = $this->sendMessage('Data berhasil dihapus');
            $message = $jsonResponse->getData()->message;
    
            session()->flash('success_message', $message);
        }
        return redirect('users');
    }
}