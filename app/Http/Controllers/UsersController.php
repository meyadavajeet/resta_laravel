<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
class UsersController extends Controller
{
    function register(Request $request){
        //       return $request->input();
//        echo Crypt::encrypt('hubroot123@');
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Crypt::encrypt($request->input('password')) ;
        $user->save();
//        $request->session()->put('user', $request->input('name'));
        $request->session()->flash('success_msg', 'Registration Success!!');
        return redirect('/login');
    }

    function login(Request $request){
        $user = User::where("email",$request->input('email'))->get();
        if(Crypt::decrypt($user[0]->password)==$request->input('password'))
        {
            $request->session()->put('user',$user[0]->name);
            return redirect('/');
        }
    }
}
