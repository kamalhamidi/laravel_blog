<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;


class PostsController extends Controller


{
    
    
    public function index(){
        return view('blog.index')->with('posts', Post::get()) ;
    }

   
    public function create(){
        return view('blog.create');
    }

   
    public function store(Request $request){
        $request->validate([
            'title_form' => 'required',
            'descreption_form' => 'required',
            'image_form' => 'required|mimes:jpg,png,jpeg,avif,webp'
        ]);

        $slug = Str::slug($request->title_form , '-');

        $newNameImage = uniqid() . '-' . $request->title_form  . '.' . $request->image_form->extension() ;
        $request->image_form->move(public_path('images'), $newNameImage);


        Post::create([
            'title'=> $request->input('title_form'),
            'slug' => $slug,
            'descreption' => $request->input('descreption_form'),
            'image_path' => $newNameImage,
            'user_id' => auth()->user()->id 
        ]);


        //=============================== MY VERSION =======================================
        // $post = new Post();
        

        // $post->title = strip_tags($request->input('title_form'));
        // $post->slug = strip_tags($slug);
        // $post->descreption = strip_tags($request->input('descreption_form'));
        // $post->image_path = strip_tags($newNameImage);
        // $post->user_id = auth()->user()->id ;

        // $post->save();
        //==================================================================================




        return redirect('/blog');
    }

   
    public function show($slug){
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }
    

  
    public function edit($slug){
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());
    }

   
    public function update(Request $request, $slug){
        $request->validate([
            'title_form' => 'required',
            'descreption_form' => 'required',
            'image_form' => 'required|mimes:jpg,png,jpeg,avif,webp'
        ]);

        $newNameImage = uniqid() . '-' . $request->title_form  . '.' . $request->image_form->extension() ;
        $request->image_form->move(public_path('images'), $newNameImage);


        Post::where('slug', $slug )
        ->update([
            'title'=> $request->input('title_form'),
            'slug' => $slug,
            'image_path' => $newNameImage,
            'descreption' => $request->input('descreption_form'),
            'user_id' => auth()->user()->id 
        ]);

        return redirect('/blog/' . $slug)
        ->with('message', 'the edit was succesfull');
    }

   
    public function destroy($slug){
        Post::where('slug', $slug )->delete(); 
        return redirect('/blog' )
        ->with('message', 'the post was deleted');


        
    }
}
