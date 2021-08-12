<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'title_bm' => 'required',
            'body' => 'required',
            'body_bm' => 'required',
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'title_bm' => $request->title_bm,
            'body' => $request->body,
            'body_bm' => $request->body_bm,
        ]);

        return back();
    }
}
