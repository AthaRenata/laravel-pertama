<?php

namespace App\Http\Controllers\Api;

use App\Helpers\JwtToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class ApiAuthController extends ApiController
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $secretKey = $request->header('authorization'); // jngn lupa di encrypt

        $token = JwtToken::setData([
            'email' => $email,
            'id' => 1,
            'role_id' => 1
        ])
            ->build();

        return $this->sendSuccess($token);
    }

    public function logout(Request $request){
        JwtToken::blacklist();
        return $this->sendSuccess("ok");
    }
}
