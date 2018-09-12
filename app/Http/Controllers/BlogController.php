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
        $blog = \App\Blog::create([
            'title'=> $request->input('title'),
            'content'=> $request->input('content'),
            'category_id'=> $request->input('category'),
            'imagen'=>''
        ]);
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('blogs/'.$blog->id.'/'), $imageName);
        \App\Blog::find($blog->id)->update([
            'imagen'=>$imageName
        ]);
        flash('Blog registrado!')->success();
        return redirect('admin/blog/');
    }
    
    public function update(Request $request, $blogid){
        if ($request->isMethod('post')) {
            \App\Blog::find($blogid)->update([
                'title'=> $request->input('title'),
                'content'=> $request->input('content'),
                'category_id'=> $request->input('category')
            ]);
            flash('Blog actualizado!')->success();
            return redirect('admin/blog/');
            }else{
                $categories = \App\Category::pluck('name', 'id');
                $blog = \App\Blog::find($blogid);
                return view('admin.blog.update', array(
                    'categories'=>$categories,
                'blog'=>$blog
            ));
        }
    }

    public function delete(Request $request, $id){
        \App\Blog::find($id)->delete();
        flash('Blog eliminado!')->success();
        return redirect('admin/blog/');
    }
}
