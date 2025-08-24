<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfiloController extends Controller
{
    public function profilo($username){
        $user = User::where("name", $username)->firstorfail();
        return view("profile.show", compact("user"));
    }
}
