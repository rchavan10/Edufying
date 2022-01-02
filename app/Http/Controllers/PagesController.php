<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin(){
        return view('pages.admin',compact('title'));   
    }
    public function front(){
        return view('pages.front',compact('title'));
    }
    public function register(){
        return view('pages.register',compact('title'));
    }
    public function sign_in(){
        return view('pages.sign_in',compact('title'));
    }
    public function face(){
        return view('pages.face',compact('title'));
    }
    public function analyze(){
        return view('pages.analyze',compact('title'));
    }
    public function analysis(){
        return view('pages.analysis',compact('title'));
    }
}
    