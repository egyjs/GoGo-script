<?php

namespace App\Http\Controllers\Dash;

use App\About;
use App\Http\Controllers\Controller;
use App\Info;
use App\Protofolio;
use App\Service;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;


class DashController extends Controller
{

    public function index(){
        $info = Info::first();
        return view('dash.index',compact('info'));
    }

    // Settings Functions
    public function settings(){
        $info = Info::first();
        return view('dash.set',compact('info'));
    }
    public function set(Request $r){
        $validatedData = $r->validate([
            'name'=>"required|min:6",
            "email"=>'required',
            'photo' => 'mimes:jpg,png,jpeg|max:5024'
        ]);
        $input = $this->make_input($r);
        $info = Info::where("id","1")->update($input);
        return redirect(route('dash.settings'))->with('stat',"Successfully Updated");
    }


    // About section Functions
    public function about(){
        $info = Info::first();
        $about = About::first();
        return view('dash.about',compact('info',"about"));
    }
    public function abo(Request $r){
        $a = About::where('id',1)->update(['head'=>"$r->head","body"=>"$r->body"]);
        return redirect(route('dash.about'))->with('stat',"Successfully Updated");

    }


    // Features Section
    public function features(){
        $ser = Service::all();
        $info = Info::first();
        return view('dash.feat.all',compact('info','ser'));
    }
    public function featedit($id){
        $inf = Info::all();
        $info = $inf[0];
        $service = Service::find($id);  //findOrfail($id);
        return view('dash.feat.edit',compact('info','service'));
    }
    public function feate($id,Request $r){
        $validatedData = $r->validate([
            'head'=>"required|min:6",
            "body"=>'required|max:300',
            'icon' => 'mimes:jpg,svg,png,jpeg|max:5024'
        ]);
        $a = Service::where('id',$id)->update(['head'=>"$r->head","body"=>"$r->body","icon"=>Self::upload_icon($r->icon)]);
        return redirect()->back()->with('stat',"Successfully Updated");

    }
    public function featadd(){
        $inf = Info::all();
        $info = $inf[0];
        return view('dash.feat.add',compact('info'));

    }
    public function feata(Request $r){
        $validatedData = $r->validate([
            'head'=>"required|min:6",
            "body"=>'required|max:300',
            'icon' => 'mimes:jpg,svg,png,jpeg|max:5024'
        ]);
        $a = Service::create(['head'=>"$r->head","body"=>"$r->body","icon"=>Self::upload_icon($r->icon)]);
        return redirect()->back()->with('stat',"Successfully Updated");
    }
    public function featdel($id){
        Service::destroy($id);
        return $this->features();
    }

    // Portfolio Section
    public function work(){
        $ser = Protofolio::all();
        $info  = Info::first();
        return view('dash.work.all',compact('info','ser'));
    }
    public function workedit($id){
        $inf = Info::all();
        $info = $inf[0];
        $service = Protofolio::find($id);  //findOrfail($id);
        return view('dash.work.edit',compact('info','service'));
    }
    public function worke($id,Request $r){
        $validatedData = $r->validate([
            'head'=>"required|min:6",
            "body"=>'required',
            "tag"=>'required',
            'img' => 'mimes:jpg,svg,png,jpeg|max:5024'
        ]);
        $a = Protofolio::where('id',$id)->update(['head'=>"$r->head",'tag'=>"$r->tag","body"=>"$r->body","img"=>Self::upload_icon($r->img)]);
        return redirect()->back()->with('stat',"Successfully Updated");

    }
    public function workadd(){
        $inf = Info::all();
        $info = $inf[0];
        return view('dash.work.add',compact('info'));

    }
    public function worka(Request $r){
        $validatedData = $r->validate([
            'head'=>"required|min:6",
            "body"=>'required',
            "tag"=>'required',
            'img' => 'mimes:jpg,svg,png,jpeg|max:5024'
        ]);
        $img = Self::upload_icon($r->img);
        $a = Protofolio::create(['head'=>"$r->head",'tag'=>"$r->tag",'link'=>"$r->link","body"=>"$r->body","img"=>"$img"]);
        return redirect()->back()->with('stat',"Successfully Updated");
    }
    public function workdel($id){
        Protofolio::destroy($id);
        return $this->features();
    }



    // Custom Function
    function make_input($r){
        $in = array();
        $in['name'] = $r->name;
        $in['jobs'] = $r->jobs;
        $in['phone'] = $r->phone;
        $in['email'] = $r->email;
        $in['locat'] = $r->locat;
        $in['fb'] = $r->fb;
        $in['yt'] = $r->yt;
        $in['in'] = $r->in;
        $in['tw'] = $r->tw;

        if ($r->has("photo")):
            $img = Self::upload($r->photo);
            $in['photo'] = $img;
        endif;
        if ($r->has("icon")):
            $icon = Self::upload_icon($r->icon);
            $in['icon'] = $icon;
        endif;
        return $in;
    }
    function upload($img){
        $path = public_path('/media/photo');
        $name ='photo_'. time().'.'.$img->getClientOriginalExtension();
        $img->move($path,$name);
        return asset('media/photo/'.$name);
    }
    function upload_icon($img){
        $path = public_path('/media/icon');
        $name ='photo_'. time().'.'.$img->getClientOriginalExtension();
        $img->move($path,$name);
        return asset('media/icon/'.$name);
    }

}
