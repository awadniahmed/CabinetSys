<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patient;
use App\models\Ordonnance;
use App\models\Observation;

class patientController extends Controller
{
    //


    public function insertPatient(Request $request)
    {


    $patient= new Patient();
    $patient->nom=$request->nom;
    $patient->prenom=$request->prenom;
    $patient->age=$request->age;
    $patient->sexe=$request->sexe;
    $patient->date_naissance=$request->date_naissance;
    $patient->email=$request->email;
    $patient->phone=$request->phone;
    $patient = $patient->save();

    if ($patient) {
        return redirect('patient')->with('status','Patient Céer Avec Success');
    }
    }


    public function modifierPatient($id)
    {
        $patient= Patient::find($id);
        return view('modifierpatient',compact('patient'));

    }


    public function updatePatient(Request $request,$id)
    {


        $patient = Patient::find($id);
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->age=$request->age;
        $patient->sexe=$request->sexe;
        $patient->date_naissance=$request->date_naissance;
        $patient->email=$request->email;
        $patient->phone=$request->phone;
        $patient = $patient->update();
            if ($patient)
             {
                return redirect('patient')->with('status','Opération se Fait Avec Success');
            }

        }



    public function deletPatient($id)
    {
        $patient=Patient::where("id",$id)->delete();
        if($patient)
        {
            return redirect('patient')->with('status2','Opération se Fait Avec Success');
        }

    }


public function getPatient(Request $request)
{
    $patient=Patient::where("date_naissance",$request->date_naissance)->get();
    if($patient)
    {
        return view('recherche.getpatient',compact('patient'));
    }
    else
    {
        return redirect('selectAllPatient')->with('error','Acun Résultat Trouvée ');
    }
}

    public function dossierMedical ($id)
    {
        $patient=Patient::where("id",$id)->first();
        $ordonnance=Ordonnance::where("patient",($patient->nom." ".$patient->prenom))->get();
        $observation=Observation::where("patient",($patient->nom." ".$patient->prenom))->get();
        if(($patient) && ($ordonnance) && ($observation))
        {
        return view('dossier',compact(('patient'),('ordonnance'),('observation')));
        }
    }


    public function selectAllPatient()
    {
        $patient = Patient::all();

        if($patient)
        {
            return view('liste.listepatient',compact('patient')) ;
        }
    }

    public function patient()
    {
            return view('patient',) ;

    }
}
