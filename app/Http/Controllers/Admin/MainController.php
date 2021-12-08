<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }
    public function login(Request $request)
    {
       //
    }
    public function orders(Request $request)
    {
        $customers = Customer::get();
        return view('admin.orders',compact('customers'));
    }
}
