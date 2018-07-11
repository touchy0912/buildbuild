<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thema;
use App\Datasave;

class ThemasController extends Controller
{
    public function random_thema()
    {
        
        $themas=Thema::orderByRaw('RAND()')->get();
        
        
        return view('pages.thema',['themas'=>$themas]);
    }
}
