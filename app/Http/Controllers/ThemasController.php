<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thema;
use App\Datasave;

class ThemasController extends Controller
{
    public function random_thema(Request $request,$users)
    {
        
        $themas=Thema::orderByRaw('RAND()')->get();
        
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.start',['themas'=>$themas,'users'=>$users,'roles'=>$roles]);
    }
    
    public function feedback(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        
        
        
        
        return view('pages.feedback',['users'=>$users,'roles'=>$roles]);
    }
    
}
