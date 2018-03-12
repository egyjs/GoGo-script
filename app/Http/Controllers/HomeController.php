<?php

namespace App\Http\Controllers;

use App\About;
use App\Info;
use App\Post;
use App\Protofolio;
use App\Service;
use App\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {

    }
    public function index()
    {
        $info = Info::first();
        $about = About::first();
        $posts = Post::all();
        $port = Protofolio::all();
        $skill = Skill::all();
        $ser = Service::all();
        return view('welcome',compact('posts','ser','port','skill','info','about'));
    }
}
