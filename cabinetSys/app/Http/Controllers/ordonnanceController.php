<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patient;
use App\models\Docteur;
use App\models\Ordonnance;
class ordonnanceController extends Controller
{

    public function listAllOrdonnance()
    {
        $ordonnance=Ordonnance::all();
        if($ordonnance)
        {
            return view('liste.listeordonnance',compact('ordonnance')) ;
        }
    }
    public function  ordonnance()
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        if(($patient )&&($docteur))
        {
            return view('ordonnance',compact(('patient'),('docteur'))) ;
        }
    }

    public function modifierOrdonnance($id)
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        $ordonnance= Ordonnance::find($id);

        if(($patient )&&($docteur)&&($ordonnance))
        {
            return view('modifierordonance',compact(('patient'),('docteur'),('ordonnance'))) ;
        }
    }

    public function insertOrdonnance(Request $request)
    {
    $ordonnance= new Ordonnance();
    $ordonnance->description=$request->description;
    $ordonnance->date=$request->date;
    $ordonnance->docteur=$request->docteur;
    $ordonnance->patient=$request->patient;


    $ordonnance = $ordonnance->save();

    if ($ordonnance) {
        return redirect('ordonnance')->with('status','Ordonnance Ajouter Avec Success');
    }
    }

    public function updateOrdonnance(Request $request, $id)
    {


        $ordonnance = Ordonnance::find($id);
        $ordonnance->description=$request->description;
        $ordonnance->date=$request->date;
        $ordonnance->docteur=$request->docteur;
        $ordonnance->patient=$request->patient;

        $ordonnance = $ordonnance->update();
            if ($ordonnance)
             {
                return redirect('ordonnance')->with('status','Opération se Fait Avec Success');
            }

        }


        public function getOrdonnance(Request $request)
        {
            $ordonnance=Ordonnance::where("id",$request->id)->get();
            if($ordonnance)
            {
                return view('recherche.getordonnance',compact('ordonnance'));
            }
            else
            {
                return redirect('listAllOrdonnance')->with('error','Acun Résultat Trouvée ');
            }
        }

        public function deletOrdonnance($id)
        {
            $ordonnance=Ordonnance::where("id",$id)->delete();
            if($ordonnance)
            {
                return redirect('listAllOrdonnance')->with('status2','Opération se Fait Avec Success');
            }

        }

}
