<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function teams(){
        return view('pages.teams');
    }
    public function about(){
        return view('pages.about');
    }
    public function formations(){
        return view('pages.formations');
    }
}
