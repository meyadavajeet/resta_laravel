<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Session;
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

    function delete($id){
//        return $id;
        Restaurant::find($id)->delete($id);
        Session::flash('success_msg', 'Restaurant deleted successfully!!');
        return redirect('/list');
    }

    function edit($id){
       $data = Restaurant::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $request)
    {

        $restaurant = Restaurant::find($request->input('id'));
        $restaurant->name = $request->input('name');
        $restaurant->email = $request->input('email');
        $restaurant->address = $request->input('address');
        $restaurant->save();
        $request->session()->flash('success_msg', 'Restaurant created successfully!!');
        return redirect('/list');
    }
}
