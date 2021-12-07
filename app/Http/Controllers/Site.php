<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\User;
class Site extends Controller

{
    public function first()
    {
        return view("first");
    }

    public function register(Request $request)
    {   dd($request->all());
        $user = new User();
        $user->name=$request->post('name');
        $user->email=$request->post('email');
        $user->password=bcrypt($request->post('password'));
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
