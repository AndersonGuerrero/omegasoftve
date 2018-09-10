<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = \App\Blog::all();
        return view('admin.blog.index', array('blogs'=>$blogs));    
    }

    public function create(){
        $categories = \App\Category::pluck('name', 'id');
        return view('admin.blog.create', array('categories'=>$categories));
    }
    
    public function store(Request $request){
        \App\Blog::create([
            'title'=> $request->input('title'),
            'content'=> $request->input('content'),
            'category_id'=> $request->input('category')
        ]);
        flash('Blog registrado!')->success();
        return redirect('admin/blog/');
    }

    public function update(Request $request, $id){
    }
}
