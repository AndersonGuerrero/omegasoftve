<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = \App\Category::all();
        return view('admin.category.index', array('categories'=>$categories));    
    }

    public function create(){
        return view('admin.category.create');
    }
    
    public function store(Request $request){
        \App\Category::create([
            'name'=> $request->input('name')
        ]);
        flash('Categoria registrada!')->success();
        return redirect('admin/category/');
    }
    
    public function update(Request $request, $categoryid){
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
        try {
            \App\Category::find($id)->delete();
            flash('Categoria eliminado!')->success();
        } catch (\Exception $e) {
            flash('No puedes eliminar esta categoria, Posee blogs relacionados!')->error();
        }
        return redirect('admin/category/');
    }
}
