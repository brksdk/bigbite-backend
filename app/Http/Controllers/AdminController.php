<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bigbitemenu;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Rating;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data=bigbitemenu::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data=bigbitemenu::all();
        //dd($data);
        $categories = Category::all();

        return view("admin.foodmenu",compact("data",'categories'));
    }

    public function upload(Request $request)
    {
        $data = new bigbitemenu();
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image=$imagename;
            $data->name=$request->name;
            $data->price=$request->price;
            $data->ingredients=$request->ingredients;
            $data->category_id=$request->category;
            $data->save();

            return redirect()->back();
    }
    public function customer()
    {
        $data=customer::all();
        return view("admin.customers",compact("data"));
    }

    public function deletecustomer($id)
    {
        $data=customer::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function order()
    {
        $data=order::all();
        return view("admin.orders",compact("data"));
    }

    public function rating()
    {
        $data=rating::all();
        return view("admin.ratings",compact("data"));
    }
    public function deleteorder($id)
    {
        $data=order::find($id);
        $data->delete();
        return redirect()->back();
    }


}
