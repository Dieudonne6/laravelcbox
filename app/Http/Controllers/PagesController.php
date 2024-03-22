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
<<<<<<< HEAD
    public function developmobile(){
        return view('pages.developmobile');
    }
    public function mtninformatique(){
        return view('pages.mtninformatique');
    }
    public function energierenouvelable(){
        return view('pages.energierenouvelable');
    }
    public function commerce(){
        return view('pages.commerce');
=======
    public function audit(){
        return view('pages.audit');
    }
    public function design(){
        return view('pages.designgraphic');
    }
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
>>>>>>> 06f674861351a21cc010b40e181af28db476b8d0
    }
    public function videosurveillance(){
        return view('pages.videosurveillance');
    }
    public function controldaccespresence(){
        return view('pages.controldaccespresence');
    }
}

