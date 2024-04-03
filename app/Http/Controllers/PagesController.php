<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    // public function developmobile(){
    //     return view('pages.developmobile');
    // }
    // public function mtninformatique(){
    //     return view('pages.mtninformatique');
    // }
    // public function energierenouvelable(){
    //     return view('pages.energierenouvelable');
    // }
    // public function commerce(){
    //     return view('pages.commerce');

    // }
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
    }

    public function sendcontact(Request $request)
    {
        // Validez et traitez les données du formulaire ici...


        // Appelez la fonction pour envoyer l'e-mail
        $this->sendEmail($request);
        

        // Autres actions après l'envoi de l'e-mail...

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }

    private function sendEmail(Request $request)
    {
        // Récupérez les données du formulaire
        $email = $request->input('email');
        $entreprise = $request->input('entreprise');
        $message = $request->input('message');

        $contactMail = new ContactMail($email, $entreprise, $message);


        // Envoyez l'e-mail
        Mail::to('dieudonneayena6@gmail.com')->send(new ContactMail($email, $entreprise, $message));
    }
    public function videosurveillance(){
        return view('pages.videosurveillance');
    }
    public function controldaccespresence(){
        return view('pages.controldaccespresence');

    }
}

