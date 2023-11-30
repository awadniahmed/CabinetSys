<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\rdvController;
use App\Http\Controllers\observationController;
use App\Http\Controllers\ordonnanceController;
use App\Http\Controllers\lettreController;
use App\Http\Controllers\consultationController;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//route page
Route::get('/', function () { return view('login/login');});
Route::get('loginassistant', function () { return view('login/loginassistant');});
Route::get('register', function () { return view('login/register'); });




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();});


//route methode DocteurController
Route::post('insertUser',[userController::class,'insertUser'])->name('ajouter-user');
Route::post('loginDocteur',[userController::class,'loginDocteur'])->name('loginDocteur');
Route::get('logoutDocteur',[userController::class,'logoutDocteur'])->name('logoutDocteur');
Route::post('loginAssistant',[userController::class,'loginAssistant'])->name('loginAssistant');
//route methode patientController
Route::get('patient',[patientController::class,'patient'])->name('patient');
Route::post('getPatient',[patientController::class,'getPatient'])->name('getPatient');
Route::get('selectAllPatient',[patientController::class,'selectAllPatient'])->name('selectAllPatient');
Route::get('modifierpatient/{id}',[patientController::class,'modifierPatient']);
Route::post('insertpatient',[patientController::class,'insertPatient']);
Route::post('updatepatient/{id}',[patientController::class,'updatePatient'])->name('update-patient');
Route::get('deletpatient/{id}',[patientController::class,'deletPatient']);
Route::get('dossierMedical/{id}',[patientController::class,'dossierMedical']);

//route methode RDVController
Route::get('rdv',[rdvController::class,'rdv'])->name('rdv');
Route::post('getRdv',[rdvController::class,'getRdv'])->name('getRdv');
Route::get('listPatientDocteurRdv',[rdvController::class,'listPatientDocteurRdv'])->name('listPatientDocteurRdv');
Route::get('modifierrdv/{id}',[RdvController::class,'modifierRdv']);
Route::post('insertRdv',[rdvController::class,'insertRdv']);
Route::post('updaterdv/{id}',[rdvController::class,'updateRdv'])->name('update-rdv');
Route::get('deletrdv/{id}',[rdvController::class,'deletRdv']);
//route methode ObservationController
Route::get('observation',[observationController::class,'observation'])->name('observation');
Route::get('listAllObservation',[observationController::class,'listAllObservation'])->name('listAllObservation');
Route::post('getObservation',[observationController::class,'getObservation'])->name('getObservation');
Route::get('modifierObservation/{id}',[observationController::class,'modifierObservation']);
Route::post('insertObservation',[observationController::class,'insertObservation']);
Route::post('updateObervation/{id}',[observationController::class,'updateObervation'])->name('update-observation');
Route::get('deletObservation/{id}',[observationController::class,'deletObservation']);
//route methode OrdonanceController
Route::get('ordonnance',[ordonnanceController::class,'ordonnance'])->name('ordonnance');
Route::post('getOrdonnance',[ordonnanceController::class,'getOrdonnance'])->name('getOrdonnance');
Route::get('listAllOrdonnance',[ordonnanceController::class,'listAllOrdonnance'])->name('listAllOrdonnance');
Route::get('modifierOrdonnance/{id}',[ordonnanceController::class,'modifierOrdonnance']);
Route::post('insertOrdonnance',[ordonnanceController::class,'insertOrdonnance']);
Route::post('updateOrdonnance/{id}',[ordonnanceController::class,'updateOrdonnance'])->name('update-ordonnance');
Route::get('deletOrdonnance/{id}',[ordonnanceController::class,'deletOrdonnance']);
//route methode LettreController
Route::get('lettre',[lettreController::class,'lettre'])->name('lettre');
Route::get('listeAllLettre',[lettreController::class,'listeAllLettre'])->name('listeAllLettre');
Route::get('modifierLettre/{id}',[lettreController::class,'modifierLettre']);
Route::post('insertLettre',[lettreController::class,'insertLettre']);
Route::post('updateLettre/{id}',[lettreController::class,'updateLettre'])->name('update-lettre');
Route::get('deletLettre/{id}',[lettreController::class,'deletLettre']);
//route methode ConsultationController

Route::get('consultation',[consultationController::class,'consultation'])->name('consultation');
Route::get('listeAllConsultation',[consultationController::class,'listeAllConsultation'])->name('listeAllConsultation');
Route::get('modifierConsultation/{id}',[consultationController::class,'modifierConsultation']);
Route::post('insertConsultation',[consultationController::class,'insertConsultation']);
Route::post('getConsultation',[consultationController::class,'getConsultation'])->name('getConsultation');
Route::post('updateConsultation/{id}',[consultationController::class,'updateConsultation'])->name('update-consultation');
Route::get('deletConsultation/{id}',[consultationController::class,'deletConsultation']);

