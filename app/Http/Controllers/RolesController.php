<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Datasave;

class RolesController extends Controller
{
    
    public function user1($users)
    {
        
        $users=unserialize(urldecode($users));
        $roles=Role::orderByRaw('RAND()')->get();
        
        
        return view('pages.user1',['users'=>$users,'roles'=>$roles]);
    }

   
    public function user2(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.user2',['users'=>$users,'roles'=>$roles]);
    }

    public function user3(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.user3',['users'=>$users,'roles'=>$roles]);
    }

   
    public function user4(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.user4',['users'=>$users,'roles'=>$roles]);
    }

    public function user5(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.user5',['users'=>$users,'roles'=>$roles]);
    }

    public function user6(Request $request,$users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        
        return view('pages.user6',['users'=>$users,'roles'=>$roles]);
    }
    
    
        public function next1(Request $request,$users)
    {
    
                $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        return view('pages.next1',['users'=>$users,'roles'=>$roles]);
    }
    
    
        
        public function next2(Request $request,$users)
    {
    
                $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        return view('pages.next2',['users'=>$users,'roles'=>$roles]);
    }
    
        
        public function next3(Request $request,$users)
    {
    
                $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        return view('pages.next3',['users'=>$users,'roles'=>$roles]);
    }
    
        
        public function next4(Request $request,$users)
    {
    
                $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        return view('pages.next4',['users'=>$users,'roles'=>$roles]);
    }
    
        
        public function next5(Request $request,$users)
    {
    
                $users=unserialize(urldecode($users));
        
        $roles=$request->roles;
        $roles=unserialize(urldecode($roles));
        return view('pages.next5',['users'=>$users,'roles'=>$roles]);
    }
    
        

}
   