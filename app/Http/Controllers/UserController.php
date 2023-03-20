<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UserController extends Controller
{

    // ======= ENREGISTREMENT ========= //
    public function getRegistration()
    {
        return view('registration');
    }

    public function registration(Request $request)
    {
        // VALIDATION
        $validated = $request->validate(
            [
                'identifiant' => ['required', 'max:10', 'unique:users'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:8', 'confirmed'],
                'avatar' => 'required',
            ],
            [
                "identifiant.required" => "Ce champ est réquis",
                "identifiant.max" => "10 caractères au maximum",
                "identifiant.unique" => "Cet identifiant existe déjà",


                "email.required" => "Ce champ est réquis",
                "email.email" => "Ce champ est un mail",
                "email.max" => "225 caracters au maximum",
                "email.unique" => "Ce mail existe déjà",

                "password.required" => "Ce champ est réquis",
                "password.min" => "8 caractère au minimum",
                "password.confirmed" => "Les deux mots de passe ne sont pas conforme",

                "avatar.required" => "Ce champ est réquis",
            ]

        );
        // ENREGISTREMENT DANS LA DB
        $file = $request->file('avatar');
        $avatar = $file->getClientOriginalName();

        $file->storeAs('avatars',$avatar,'public');
        
        // dd($avatar);
        $data = [
            'identifiant' => $request->identifiant,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar'=>$avatar
        ];
        if ($validated) {
            User::create($data);
        }

        // RETOUR AVEC LE MESSAGE DU SUCCES
        return redirect()->back()->with('success', 'Vous êtes enregistré avec succès! Veuillez vous connecter!');
    }

    // ======= CONNEXION ========= //
    public function getLogin()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {

        $validated = $request->validate(
            [
                'identifiant' => 'required',
                'password' => 'required',
            ],
            [
                "identifiant.required" => "Ce champ est réquis",
                "password.required" => "Ce champ est réquis",
            ]
        );

        $user = [
            'identifiant' => $request->identifiant,
            'password' => $request->password
        ];

        #### AUTHENTIFICATION ####

        if (Auth::attempt($user)) {
            //   REGENERATION DE LA SESSION POUR L'UTILISATEUR
            $request->session()->regenerate();

            //   RETOUR A LA PAGE DE CONNEXION
            return redirect('/panel')->with('success', 'Vous êtes connecté avec succès!');
        }

        // =========== REDIRECTION EN CAS D'ECHEC =======
        return redirect()->back()->with('error', 'Connexion échouée! Vérifier vos coordonnées et réessayez!');
    }

    public function logout(Request $request)
    {
        // °°°°°°°°°°° DECONNEXION DU USER
        Auth::logout();

        // °°°°°°°°° SUPPRESION DES SESSIONS
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // °°°°°° REDIRECTION °°°°°°°°°°°°
        return redirect('/')->with('success', 'Vous êtes déconnecté avec succès!');
    }
}
