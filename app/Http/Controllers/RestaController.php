<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $data = Restaurant::all();
        return view('list', ['data' => $data]);
    }

    public function add(Request $request)
    {

//       return $request->input();
        $restaurant = new Restaurant;
        $restaurant->name = $request->input('name');
        $restaurant->email = $request->input('email');
        $restaurant->address = $request->input('address');
        $restaurant->save();
        $request->session()->flash('success_msg', 'Restaurant created successfully!!');
        return redirect('/list');
    }
}
