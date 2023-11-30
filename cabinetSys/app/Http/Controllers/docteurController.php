<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class docteurController extends Controller
{
    //
    public function loginUser(Request $request)
    {
        $login = $request->email;
        $password =$request->password;
        if(Auth::attempt(['email' => $login, 'password' => $password]))
        {
            $request->session()->regenerate();
            return to_route('patient');
        }
        else
        {
            return redirect('/')->with('status','Adresse Email ou Mot de Passe Incorrecte');
        }
    }
}
