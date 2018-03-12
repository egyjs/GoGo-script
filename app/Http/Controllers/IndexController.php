<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index (){
        return view('welcome');
    }

    public function getall(){
    return Post::all();
    }

    public function getby($name){
        return Post::where('title',$name)->get();
    }

    public function getbyid($id){
        return Post::find($id);
    }

    public function add(Request $req){
        $post = new Post();
        $post->title = $req->input('title');
        $post->post  = $req->input('post');
        $post->u_id  = Auth::user()->id;
        $post->save(); // update()
    }
}

