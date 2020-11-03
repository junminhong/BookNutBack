<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    //
    public function index(){
        return DB::select("select * from users");
    }
    public function login(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');
        $users = Users::where('email', '=', $email)->get();
        if (Auth::check()){
            return Redirect::to('/');
        }else {
            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                return 'login successful';
                Redirect::to('/');
            } else {
                return 'login failed';
            }
        }
    }
    public function getData(Request $request){
        $request->validate(
            [
                'email'=>'required | max:10',
                'password'=>'required | max:10'
            ]
        );
        return $request->input();
    }
    public function logout(){
        Auth::logout();
        return Redirect::to('login');
    }
}
