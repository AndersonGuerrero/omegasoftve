<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogWebController extends Controller{

public function blogCategory($id){
        if (!Auth::check()) {
            return redirect('login/');
        }
         // Buscamos el id en la tabla
         $categories = \App\Category::all();
         // retornamos la vista con los datos 
         return view('blog.blogCategory')->with('categories', $categories);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos.     
    }
}