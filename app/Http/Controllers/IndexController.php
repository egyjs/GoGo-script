<?php

namespace App\Http\Controllers;
use App\About;
use App\Info;
use App\Post;
use App\Protofolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

class IndexController extends Controller
{
    public function index ()
    {
        $work = Protofolio::all();
        $info = Info::first();
        $about = About::first();
        $services = Service::all();
        return view('welcome',compact('about','services','info','work'));
    }

}

