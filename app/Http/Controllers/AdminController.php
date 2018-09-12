<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        return view('admin.index');
    }
}
