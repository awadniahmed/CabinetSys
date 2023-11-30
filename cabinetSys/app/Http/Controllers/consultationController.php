<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Consultation;
use App\models\Docteur;
use App\models\Typeconsultation;
class consultationController extends Controller
{
    //
    public function consultation()
    {
        $docteur=Docteur::all();
        $typeConsultation =Typeconsultation::all();
        if(($docteur)&&($typeConsultation))
        {
            return view('consultation',compact(('docteur'),('typeConsultation'))) ;
        }
    }

    public function listeAllConsultation()
    {

        $consultation=Consultation::all();

        if($consultation)
        {
            return view('liste.listeconsultation',compact('consultation')) ;
        }
    }

    public function modifierConsultation($id)
    {
        $docteur=Docteur::all();
        $typeConsultation=Typeconsultation::all();
        $consultation= Consultation::find($id);

        if(($docteur)&&($consultation)&&($typeConsultation))
        {
            return view('modifierconsultation',compact(('consultation'),('docteur'),('typeConsultation'))) ;
        }
    }


    public function getConsultation(Request $request)
        {
            $consultation=Consultation::where("date",$request->date)->get();
            if($consultation)
            {
                return view('recherche.getconsultation',compact('consultation'));
            }
            else
            {
                return redirect('listeAllConsultation')->with('error','Acun Résultat Trouvée ');
            }
        }

    public function insertConsultation(Request $request)
    {


    $consultation= new Consultation();
    $consultation->description=$request->description;
    $consultation->date=$request->date;
    $consultation->docteur=$request->docteur;
    $consultation->time=$request->time;
    $consultation->typeConsultation=$request->typeConsultation;
    $consultation = $consultation->save();

    if ($consultation) {
        return redirect('consultation')->with('status','Consultation Ajouter Avec Success');
    }
    }

    public function updateConsultation(Request $request, $id)
    {


        $consultation = Consultation::find($id);
        $consultation->description=$request->description;
        $consultation->date=$request->date;
        $consultation->docteur=$request->docteur;
        $consultation->time=$request->time;
        $consultation->typeConsultation=$request->typeConsultation;
        $consultation = $consultation->update();
            if ($consultation)
             {
                return redirect('consultation')->with('status','Opération se Fait Avec Success');
            }

        }

        public function deletConsultation($id)
        {
            $consultation=Consultation::where("id",$id)->delete();
            if($consultation)
            {
                return redirect('listeAllConsultation')->with('status2','Opération se Fait Avec Success');
            }

        }
}
