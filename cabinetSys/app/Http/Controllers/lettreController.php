<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patient;
use App\models\Docteur;
use App\models\Lettre;

class lettreController extends Controller
{
    //
    public function lettre()
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        if(($patient )&&($docteur))
        {
            return view('lettre',compact(('patient'),('docteur'))) ;
        }

    }

    public function listeAllLettre()
    {
        $lettre=Lettre::all();
        if(($lettre ))
        {
            return view('liste.listelettre',compact('lettre')) ;
        }
    }

    public function modifierLettre($id)
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        $lettre= Lettre::find($id);

        if(($patient )&&($docteur)&&($lettre))
        {
            return view('modifierlettre',compact(('patient'),('docteur'),('lettre'))) ;
        }
    }

    public function insertLettre(Request $request)
    {


    $lettre= new Lettre();
    $lettre->destignation=$request->destignation;
    $lettre->description=$request->description;
    $lettre->date=$request->date;
    $lettre->docteur=$request->docteur;
    $lettre->patient=$request->patient;
    $lettre = $lettre->save();

    if ($lettre) {
        return redirect('lettre')->with('status','Lettre a été  Envoyer Avec Success');
    }
    }

    public function updateLettre(Request $request, $id)
    {


        $lettre = Lettre::find($id);
        $lettre->destignation=$request->destignation;
        $lettre->description=$request->description;
        $lettre->date=$request->date;
        $lettre->docteur=$request->docteur;
        $lettre->patient=$request->patient;
        $lettre = $lettre->update();
            if ($lettre)
             {
                return redirect('lettre')->with('status','Opération se Fait Avec Success');
            }

        }

        public function deletLettre($id)
        {
            $lettre=Lettre::where("id",$id)->delete();
            if($lettre)
            {
                return redirect('listeAllLettre')->with('status2','Opération se Fait Avec Success');
            }

        }

}
