<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

class Site extends Controller

{
    public function first()
    {
        return view("first");
    }

    public function deneme(Request $request)
    {
        $user = new User();
        $user->fullName=$request->post('name');
        $user->eMail=$request->post('email');
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
