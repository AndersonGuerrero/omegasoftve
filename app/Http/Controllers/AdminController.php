<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminController extends Controller
{
    public function index(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        return view('admin.index');
    }

    public function storeUser(Request $request)
    {
        // if (!Auth::check()) {
        //     return redirect('login/');
        // }
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        flash('Usuario registrado!')->success();
        return redirect('admin/');
    }

    public function registerUser()
    {
        // if (!Auth::check()) {
        //     return redirect('login/');
        // }
        return view('auth.register_user');
    }
}
