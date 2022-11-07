<?php

namespace App\Http\Controllers;

use Session;
use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    
    public function subscribe(Request $request){
        
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:subscribers'
        ]);
        if($validator->fails()){
            return redirect()->back()->with('message', "Erro");
        }
        $email = $request->get('email');
        
        $subscriber = Subscriber::create([
            'email' => $email
        ]);
        if($subscriber){
            Mail::to($email)->send(new Subscribe($email));
            return redirect()->back()->with('message', "Registrador com sucesso");      
            
        }
    }
}
