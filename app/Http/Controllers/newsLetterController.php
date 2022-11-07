<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsLetterController extends Controller
{
    public function newsLetter(Request $request){
          
        dd($request->all());
       
        
        return view('home');
        
    }
}
