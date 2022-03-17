<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserSubscribed;

class NewsletterController extends Controller
{
    function index(){
        return view('index');
    }

    function subscribe(Request $req){
        $req->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        event(new UserSubscribed($req->input('email')));
        return back();
        
    }
}
