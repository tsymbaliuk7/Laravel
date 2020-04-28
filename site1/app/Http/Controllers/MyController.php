<?php

namespace App\Http\Controllers;

use App\MyUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;


class MyController extends Controller
{
     public function getMain(){
        return view('home');
    }

    public function getRegistr(){
        return view('signin');
    }

    public function postRegistr(Request $request){
         $validator = $this->validate($request, [
             'email' => 'bail|required|unique:myusers|email|max:255|',
             'password' => 'required|max:255|min:6|same:confirm_password|alpha_num',
             'confirm_password' => 'required|max:255'
         ]);
         DB::insert('INSERT INTO myusers (email, password) VALUES (?, ?)', [$validator['email'], Hash::make($validator['password'])]);
         return redirect('/');
    }

    public function getUsers(){
         $obj = new MyUser(0);
         $res = $obj->get_all();
         return view('users', ['data' => $res]);
     }

     public function getUserId($id){
         $temp = new MyUser($id);
         return view('user', ['obj' => $temp]);
     }


}
