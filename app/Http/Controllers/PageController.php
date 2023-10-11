<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    function index() {
        return view('index');
    }
    // for sending mail
    function sendMail(Request $request) {
        
        Mail::to('abdouabdrahim71@gmail.com')->send(new Email($request->all()));
        
        return back()->with('success', 'email sending successfully');
    }
}
