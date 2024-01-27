<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\ApiController;

class ApiUserController extends ApiController
{
    public function index(Request $request)
    {
        $userList = User::query()
            ->select(['id', 'name', 'phone', 'email', 'address'])
            ->latest('id')
            ->get();
            
        return $this->sendSuccess($userList);
    }

    public function show(Request $request, $id)
    {
        $user = User::query()
            ->select(['id', 'name', 'phone', 'email', 'address'])
            ->where('id', $id)
            ->first();
        return $this->sendSuccess($user);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => 'Lailil Mahfud',
            'password' => '123456',
            'phone' => '085111111',
            'email' => 'email@gmail.com',
            'address' => 'Jepara'
        ]);

        return $this->sendMessage("User berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        User::query()
            ->where('id', $id)
            ->update([
                'name' => 'Muhammad Lailil'
            ]);
        return $this->sendMessage('Data berhasil disimpan');
    }

    public function destroy(Request $request, $id)
    {
        User::query()
            ->where('id', $id)
            ->delete();
        return $this->sendMessage('Data berhasil dihapus');
    }
}