<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ville;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return View ('home.auth.login');
    }

    public function signup(){
        $ville = Ville::all();
        $specialite = Specialite::all();
        return View ('home.auth.signup', compact('ville', 'specialite'));
    }

    public function registerpost(AuthRequest $request){

        $docto = new User();
        $docto->nom = $request->nom;
        $docto->prenom = $request->prenom;
        $docto->date_doctor = $request->date_doctor;
        $docto->email = $request->email;
        $docto->specialite = $request->specialite;
        $docto->ville = $request->ville;
        $docto->password = Hash::make($request->password);
        $docto->save();
        // Auth()->login($docto);
        return to_route('login')->with('success', 'Merci votre compte à été bien créer.');
    }

    public function loginpost(LoginRequest $request){

        $data = $request->validated();
        if(auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended(route('patient.patient.create'));
        }
        return back()->withErrors([
            'email' => 'Identifiants Incorrets',
        ])->onlyInput('email');
    }

    public function logout(){
        Auth::logout();
        return to_route('login')->with('Vous avez logout');
    }
}
