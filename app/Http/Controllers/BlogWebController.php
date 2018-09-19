<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogWebController extends Controller{

    public function index(){
        $categories = \App\Category::all();
        return view('web.blog')->with('categories', $categories);
    }

    public function blogCategory($id){
        if (!Auth::check()) {
            return redirect('login/');
        }
    }
}