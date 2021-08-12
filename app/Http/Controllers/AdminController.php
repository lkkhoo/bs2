<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function store(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);


        if(!auth::attempt($request->only('username','password'))){
            return back()->with('status', 'Invalid Login Details');
        }

        return redirect()->route('home');
    }

    public function logout(){
        auth::logout();
        return redirect()->route('home');
    }

    public function create_post(){
        return view('createpost');
    }

}
