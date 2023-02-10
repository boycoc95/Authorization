<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])){

            $adminUser = Auth::guard('admin')->user();

            return response()->json([
                'user' => $adminUser,
                'status' => 200,
                'message' => 'login successfuly'
            ]);

        }
    }
}
