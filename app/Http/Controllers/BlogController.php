<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        $blogs = \App\Blog::all();
        return view('admin.blog.index', array('blogs'=>$blogs));    
    }

    public function create(){
        if (!Auth::check()) {
            return redirect('login/');
        }
        $categories = \App\Category::pluck('name', 'id');
        return view('admin.blog.create', array('categories'=>$categories));
    }
    
    public function store(Request $request){
        if (!Auth::check()) {
            return redirect('login/');
        }
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
        if (!Auth::check()) {
            return redirect('login/');
        }
        if ($request->isMethod('post')) {
            \App\Blog::find($blogid)->update([
                'title'=> $request->input('title'),
                'content'=> $request->input('content'),
                'category_id'=> $request->input('category')
            ]);
            $blog = \App\Blog::find($blogid);
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('blogs/'.$blog->id.'/'), $imageName);
            $blog->imagen = $imageName;
            $blog->save();
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
        if (!Auth::check()) {
            return redirect('login/');
        }
        \App\Blog::find($id)->delete();
        flash('Blog eliminado!')->success();
        return redirect('admin/blog/');
    }
}
