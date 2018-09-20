<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        $categories = \App\Category::all();
        return view('admin.category.index', array('categories'=>$categories));    
    }

    public function create(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        return view('admin.category.create');
    }
    
    public function store(Request $request){
        if (!Auth::check()) {
            return redirect('login/');
        }
        \App\Category::create([
            'name'=> $request->input('name')
        ]);
        flash('Categoria registrada!')->success();
        return redirect('admin/category/');
    }
    
    public function update(Request $request, $categoryid){
        if (!Auth::check()) {
            return redirect('login/');
        }
        if ($request->isMethod('post')) {
            \App\Category::find($categoryid)->update([
                'name'=> $request->input('name')
            ]);
            flash('Categoria actualizada!')->success();
            return redirect('admin/category/');
            }else{
                $category = \App\Category::find($categoryid);
                return view('admin.category.update', array(
                    'category'=>$category
            ));
        }
    }

    public function delete(Request $request, $id){
        if (!Auth::check()) {
            return redirect('login/');
        }
        try {
            \App\Category::find($id)->delete();
            flash('Categoria eliminado!')->success();
        } catch (\Exception $e) {
            flash('No puedes eliminar esta categoria, Posee blogs relacionados!')->error();
        }
        return redirect('admin/category/');
    }

    public function blogCategory($id){
        if (!Auth::check()) {
            return redirect('login/');
        }
         // Buscamos el id en la tabla
         $categories = Tabla::find($id);
         // retornamos la vista con los datos 
         return view('blog.blogCategory')->with('categories', $categories);
         // with() nos permite pasar variables a la vista
         // el primer parámetros es el nombre con el que estará disponible en la vista
         // el segundo son los datos.     
    }
    
}
