<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patient;
use App\models\Docteur;
use App\models\Observation;

class observationController extends Controller
{
    //
    public function listAllObservation ()
    {
        $observation=Observation::all();
        if($observation)
        {
            return view('liste.listeobservation',compact('observation')) ;
        }
    }

    public function observation()
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        if(($patient )&&($docteur))
        {
            return view('observation',compact(('patient'),('docteur'))) ;
        }
    }

    public function modifierObservation($id)
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        $observation= Observation::find($id);

        if(($patient )&&($docteur)&&($observation))
        {
            return view('modifierobservation',compact(('patient'),('docteur'),('observation'))) ;
        }
    }

    public function insertObservation(Request $request)
    {


    $observation= new Observation();
    $observation->note=$request->note;
    $observation->docteur=$request->docteur;
    $observation->patient=$request->patient;
    $observation->date_ad=$request->date_ad;

    $observation = $observation->save();

    if ($observation) {
        return redirect('observation')->with('status','Observation Ajouter Avec Success');
    }
    }

    public function updateObervation(Request $request, $id)
    {


        $observation = Observation::find($id);
        $observation->note = $request-> note ;
        $observation->patient = $request->patient;
        $observation->docteur = $request->docteur;
        $observation->date_ad = $request->date_ad;
        $observation = $observation->update();
            if ($observation)
             {
                return redirect('observation')->with('status','Opération se Fait Avec Success');
            }

        }

        public function getObservation(Request $request)
            {
                $observation=Observation::where("id",$request->id)->get();
                if($observation)
                {
                    return view('recherche.getobservation',compact('observation'));
                }
                else
                {
                    return redirect('listAllObservation')->with('error','Acun Résultat Trouvée ');
                }
            }

        public function deletObservation($id)
        {
            $observation=Observation::where("id",$id)->delete();
            if($observation)
            {
                return redirect('listAllObservation')->with('status2','Opération se Fait Avec Success');
            }


        }

}
