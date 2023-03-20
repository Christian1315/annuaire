<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DepartementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDepartementsManage()
    {
        return view('admin.gestion-departements');
    }


    public static function search($libelle)
    {
        return collect(Departement::all())->filter(function($departement) use ($libelle)
        {
            return Str::contains(strtolower($departement['libelle']),strtolower($libelle));
        })->all();
    }

    public function getAddDepartement()
    {
        return view('admin.add-departement');
    }

    public function addDepartement(Request $request)
    {

        $validated = $request->validate(
            [
                'libelle' => 'required',
                'direction' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
            ]
        );
        // ENREGISTREMENT DU DEPARTEMENT DANS LA DB
        Departement::create($request->all());

        return redirect()->back()->with('success','Departement ajouté avec succès!');
    }

    public function getUpdateDepartement (Departement $departement)
    {
        return view('admin.update-departement',compact(('departement')));
    }

    public function updateDepartement(Request $request,$id)
    {
        $validated = $request->validate(
            [
                'libelle' => 'required',
                'direction' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
            ]
        );

        // MODIFICATION DU DEPARTEMENT DANS LA DB
        $departement = Departement::find($id);
        $departement->update($request->all());

        return redirect()->back()->with('success','Departement modifié avec succès!');
    }

    
    public function showDepartement(Departement $departement)
    {
        return view('know-more-departement',compact('departement'));
    }

    public function deleteDepartement(Departement $departement)
    {
        $departement->delete();
        return redirect()->back()->with('success','Departement supprimé avec succès!');
    }

}
