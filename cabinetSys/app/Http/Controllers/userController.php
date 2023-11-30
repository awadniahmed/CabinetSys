<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\models\Docteur;
use App\models\Assistant;


class userController extends Controller
{


    public function insertUser(Request $request)
    {

        if ($request->etat==='docteur')
         {

            $docteur= new Docteur();
            $docteur->nom=$request->nom;
            $docteur->prenom=$request->prenom;
            $docteur->email=$request->email;
            $docteur->phone=$request->phone;
            $docteur->password=Hash::make($request->password);
            $docteur->etat=$request->etat;
            $user = $docteur->save();
            if ($user)
            {
                return redirect('register')->with('status','Votre Compte a été créer avec success');
            }
        }
        else
        {
            $assistant= new Assistant();
            $assistant->nom=$request->nom;
            $assistant->prenom=$request->prenom;
            $assistant->email=$request->email;
            $assistant->phone=$request->phone;
            $assistant->password=Hash::make($request->password);
            $assistant->etat=$request->etat;
            $user = $assistant->save();
            if ($user)
            {
                return redirect('register')->with('status','Votre Compte a été créer avec success');
            }
        }

     }

     public function loginDocteur(Request $request)
     {
        $docteur = Docteur::where('email','=',$request->email)->first();
        if($docteur)
        {
                if(Hash::check($request->password,$docteur->password))
                {

                 $request->session()->regenerate();
                   return redirect('patient');
                }
                else
                {
                    return redirect('/')->with('status',' Mot de passe incorrecte');
                }


        }
        else
        {

            return redirect('/')->with('status','Email Incorrecte');
        }

     }

     public function logoutDocteur()
     {
         Session::flush();
         Auth::logout();
         return redirect('/');

     }

     public function loginAssistant(Request $request)
     {
        $assistant = Assistant::where('email','=',$request->email)->first();
        if($assistant)
        {
                if(Hash::check($request->password,$assistant->password))
                {

                    $request->session()->regenerate();
                   return redirect('patient');
                }
                else
                {
                    return redirect('loginassistant')->with('status',' Mot de passe incorrecte');
                }


        }
        else
        {

            return redirect('loginassistant')->with('status','Email Incorrecte');
        }

     }

     public function logoutAssistant()
     {
         Session::flush();
         Auth::logout();
         return redirect('loginassistant');

     }

}
