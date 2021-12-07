<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $user = new User();
        $user->name=$request->post('name');
        $user->email=$request->post('email');
        $user->password=$request->post('password');
        if($user->save())
        {
            return response()->json(['succes'=>true
            ]);

        }else{
            return response()->json([
                'succes'=>false
            ]);
        }

    }
}
