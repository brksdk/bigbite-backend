<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function admin(Request $request)
    {

        $users = new User();
        $users->name=$request->post('name');
        $users->email=$request->post('email');
        $users->password=$request->post('password');
        if($users->save())
        {
            return response()->json(['succes'=>true
            ]);

        }else{
            return response()->json([
                'succes'=>false
            ]);
        }

    }

    public function register(Request $request)
    {

        $customers = new Customer();
        $customers->firstName=$request->post('firstName');
        $customers->lastName=$request->post('lastName');
        $customers->email=$request->post('email');
        $customers->phoneNumber=$request->post('phoneNumber');
        $customers->password=$request->post('password');
        if($customers->save())
        {
            return response()->json(['succes'=>true
            ]);

        }else{
            return response()->json([
                'succes'=>false
            ]);
        }

    }
    public function login(Request $request)
    {

        $user = Customer::where('email',$request->email)->where('password',$request->password)->get();

        if(count($user))
        {
            return response()->json(['status'=>true,'user' => $user]);

        }else{
            return response()->json(['status'=>false ]);
        }


    }


}
