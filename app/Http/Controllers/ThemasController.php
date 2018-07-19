<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thema;
use App\Datasave;

class ThemasController extends Controller
{
    public function random_thema(Request $request,$users)
    {
        
        $themas=Thema::all(["thema"])->toArray();
        shuffle($themas);
        
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.start',['themas'=>$themas,'users'=>$users,'roles'=>$roles]);
    }
    
    public function timer (Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $themas=$request->themas;
        $roles=unserialize(urldecode($roles));
        $themas=unserialize(urldecode($themas));
        
        return view('pages.timer',['themas'=>$themas,'users'=>$users,'roles'=>$roles]);
    }
    
    public function feedback(Request $request)
    {
        $users=$request->users;
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        
        
        
        
        return view('pages.feedback',['users'=>$users,'roles'=>$roles]);
    }
    
    public function gameend(){
        
        return view('pages.endpage');
        
    }
    
}
