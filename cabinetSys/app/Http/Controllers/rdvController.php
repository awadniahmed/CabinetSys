<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patient;
use App\models\Docteur;
use App\models\Rdv;

class rdvController extends Controller
{
    //
    public function listPatientDocteurRdv()
    {
        $rdv=Rdv::all();

        if($rdv)
        {
            return view('liste.listerdv',compact('rdv')) ;
        }
    }

    public function modifierRdv($id)
    {
        $patient=Patient::all();
        $docteur=Docteur::all();
        $rdv= rdv::find($id);

        if(($patient )&&($docteur)&&($rdv))
        {
            return view('modifierrdv',compact(('patient'),('docteur'),('rdv'))) ;
        }
    }



    public function insertRdv(Request $request)
    {

            $rdv = new Rdv();
            $rdv->date = $request-> date ;
            $rdv->designation =  $request-> designation ;
            $rdv -> dateDebut = $request->dateDebut ;
            $rdv->dateFin = $request->dateFin;
            $rdv->patient = $request->patient;
            $rdv->docteur = $request->docteur;
            $rdv->etat = $request->etat;
            $rdv= $rdv->save();
            if ($rdv)
            {
                return redirect('rdv')->with('status','Rendz-vous  Créer avec Success');
            }

    }
    public function updateRdv(Request $request, $id)
    {


        $rdv = Rdv::find($id);
        $rdv->date = $request-> date ;
        $rdv->designation =  $request-> designation ;
        $rdv -> dateDebut = $request->dateDebut ;
        $rdv->dateFin = $request->dateFin;
        $rdv->patient = $request->patient;
        $rdv->docteur = $request->docteur;
        $rdv->etat = $request->etat;
        $rdv = $rdv->update();
            if ($rdv)
             {
                return redirect('rdv')->with('status','Opération se Fait Avec Success');
            }

        }

        public function deletRdv($id)
                {
                    $rdv=Rdv::where("id",$id)->delete();
                    if($rdv)
                    {
                        return redirect('listPatientDocteurRdv')->with('status2','Opération se Fait Avec Success');
                    }

                }

                public function getRdv(Request $request)
                {
                    $rdv= Rdv::where("date",$request->date)->get();
                    if($rdv)
                    {
                        return view('recherche.getrdv',compact('rdv'));
                    }else
                    {
                        return redirect('listPatientDocteurRdv')->with('error','Acun Résultat Trouvée ');
                    }
                }

        public function rdv ()
        {
        $patient=Patient::all();
        $docteur=Docteur::all();
            if(($patient )&&($docteur))
            {
                return view('rdv',compact(('patient'),('docteur'))) ;
            }

        }


}
