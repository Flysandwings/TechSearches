<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class LoginController extends Controller
{

    function checkLogin(Request $request){
        $validatedData = $this->validateData($request);
        $user_data = $this->sanitizeData($validatedData);

        if(Auth::attempt($user_data)){
            $user = Auth::user();
            return $this->successlogin($user);
        } else {
            return back()->with('error','Wrong login details');
        }
    }

    function successLogin(){
        $user = Auth::user();
        $role = Role::find($user->role_id)->name;
        session(['role' => $role]);
        if($role === "finder"){
            return view('finder');
        }else if($role === "searcher"){
            return view('searcher');
        }
        return view('successlogin');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function index(){
        return view('login');
    }

    private function validateData(Request $request){
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
    }

    private function sanitizeData(array $data){
        $data = array_map(function ($value) {
            return strip_tags($value);
        }, $data);

        $data = array_map(function ($value) {
            return htmlentities($value, ENT_QUOTES, 'UTF-8');
        }, $data);

        return $data;
    }
}
