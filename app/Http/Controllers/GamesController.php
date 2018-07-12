<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(){
        return view('pages.toppage');
    }
    
    public function GrandRule(Request $request) {
        
        $users=[
                'user1'=>$request->user1,
                'user2'=>$request->user2,
                'user3'=>$request->user3,
                'user4'=>$request->user4,
                'user5'=>$request->user5,
                'user6'=>$request->user6
                ];
                
        $this->validate($request, [
        'user1' => 'required|max:191',
        'user2' => 'required|max:191',
        'user3' => 'required|max:191',
        'user4' => 'required|max:191',
        'user5' => 'required|max:191',
        'user6' => 'required|max:191',
        
        ]);
    
        return view("pages.grandrule", ["users"=>$users]);
    }
    
}
