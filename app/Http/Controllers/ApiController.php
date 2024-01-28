<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sendSuccess($data = [], $message = "success")
    {
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public function sendMessage($message = "success")
    {
        return response()->json([
            'code' => 200,
            'message' => $message,
        ], 200);
    }

    public function sendBadRequest($message = "Bad Request")
    {
        return response()->json([
            'code' => 400,
            'message' => $message,
        ], 400);
    }
    
    public function sendUnauthorized($message = "Unauthorized")
    {
        return response()->json([
            'code' => 401,
            'message' => $message,
        ], 401);
    }

    public function sendForbidden($message = "Forbidden")
    {
        return response()->json([
            'code' => 403,
            'message' => $message,
        ], 403);
    }
}