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
    public function equipe(){
        return view('pages.teams');
    }
    public function apropos(){
        return view('pages.about');
    }
    public function formations(){
        return view('pages.formations');
    }
    public function audit(){
        return view('pages.audit');
    }
    public function design(){
        return view('pages.design-graphic');

    public function reseaux(){
        return view('pages.reseaux');
    }
    public function applicationweb(){
        return view('pages.applicationweb');
    }
    public function siteweb(){
        return view('pages.siteweb');
    }
    public function referencement(){
        return view('pages.referencement');
    }
}
