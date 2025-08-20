<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Runner\Exception;

class PublicController extends Controller
{
    public function home (){
        return view("welcome");
    }

    public function contacts(){
        return view("contact");
    }

    public function submit(Request $request){
        $username = $request->username;
        $email = $request->email;
        $body = $request->body;
        $content = compact("username", "email", "body");
        try {
            Mail::to($email)->send(new ContactMail($content));
        } catch (Exception $e) {
            return redirect(route("home"))->with("errorMessage", "la tua email non é stata inviata riprova dopo");
        }
        return redirect(route("home"))->with("successMessage", "la tua email é stata inviata");
    }
}
