<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcuController extends Controller
{
    public function index(Request $request){
        $first = $request->input('first');
        $second = $request->input('second');
        $third = $request->input('third');
        
    
        $rectangle = $first * $second;
        $cuboid = $second * $second * $third;
        $square = $first * $first;
        
        $results = array($rectangle, $cuboid, $square);

            
        // echo $result;
        return view('index',['results' => $results]);
}
}
