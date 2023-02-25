<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        return view('partial.index',['milktea' => Todo::all()]);
    }
    public function about(){
        return view('partial.about',['about' => About::all()]);
    }
    public function contact(){
        return view('partial.contact',['contact' => Contact::all()]);
    }
}