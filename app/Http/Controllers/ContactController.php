<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Models\Contacts;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactForm(Request $request){
        // dd($request->all());
        // $email = $request->input('email');
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);
        // dd($validator);
        if($validator->fails()){
            return redirect()->back()->with('message', "Erro");  
        }
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $message = $request->get('message');

        // dd($email);
        $contact = Contacts::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);
        if($contact){
            // Mail::to($email)->send(new Contact($name, $email, $phone, $message));
            // Session::flash('message', "Registrado com sucesso");
            return redirect()->back()->with('message', "Registrador com sucesso");      
            
        }
    }
}
