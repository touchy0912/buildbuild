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
        $datasave=new Datasave();
        foreach($roles as $role){
            $datasave->role=$role->role;
            $datasave->rule1=$role->rule1;
            $datasave->rule2=$role->rule2;
            
            $datasave->save();
            
        }
        
        
        return view('pages.user1',['users'=>$users,'roles'=>$roles]);
    }

   
    public function user2($users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=Datasave::all();
        
        return view('pages.user2',['users'=>$users,'roles'=>$roles]);
    }

    public function user3($users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=Datasave::all();
        
        return view('pages.user3',['users'=>$users,'roles'=>$roles]);
    }

   
    public function user4($users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=Datasave::all();
        
        return view('pages.user4',['users'=>$users,'roles'=>$roles]);
    }

    public function user5($users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=Datasave::all();
        
        return view('pages.user5',['users'=>$users,'roles'=>$roles]);
    }

    public function user6($users)
    {
        $users=unserialize(urldecode($users));
        
        $roles=Datasave::all();
        
        return view('pages.user6',['users'=>$users,'roles'=>$roles]);
    }
    
    
        public function destroy()
    {
    
        $datasaves=Datasave::all();
        foreach($datasaves as $datasave){
            $datasave->delete();
        }
        
        return view('/');
    }
}
   