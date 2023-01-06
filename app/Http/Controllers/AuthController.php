<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $data = $request->all(['email', 'password']);

        $token = auth('api')->attempt($data);

        if(!$token){
            return response()->json(['error' => 'invalid username or password'],403);
        }

        return response()->json(['token' => $token],201);

    }

    public function logout(){
        return 'logout';
    }

    public function refresh(){
        $token = auth('api')->refresh();
        return response()->json(['token' => $token]);
    }

    public function me(){
        return response()->json(auth()->user());
    }
}
