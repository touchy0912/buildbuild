<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    public function index(){
        return view('pages.toppage');
    }
    
    public function GrandRule() {
        
        $team=\Auth::id();
        $team=Team::find($team);
        
        $user1=$team->user1;
        $user2=$team->user2;
        $user3=$team->user3;
        $user4=$team->user4;
        $user5=$team->user5;
        $user6=$team->user6;

        $users_1=[
                'user1'=>$user1,
                'user2'=>$user2,
                'user3'=>$user3,
                'user4'=>$user4,
                'user5'=>$user5,
                'user6'=>$user6
                ];
                
                
                    //キー取り出し
    $aryKey = array_keys($users_1);

    //キーを並び替え
    shuffle($aryKey);

    $users = array();    //結果を入れる配列

    //配列並び替え
    foreach($aryKey as $key){
        $users[$key] = $users_1[$key];
    }

    
        return view("pages.grandrule", ["users"=>$users]);
    }
    
}
