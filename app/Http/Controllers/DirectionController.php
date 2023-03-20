<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DirectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDirectionsManage()
    {
        return view('admin.gestion-directions');
    }

    public static function search($libelle)
    {
        return collect(Direction::all())->filter(function($direction) use ($libelle)
        {
            return Str::contains(strtolower($direction['libelle']),strtolower($libelle));
        })->all();
    }

    public function getAddDirection()
    {
        return view('admin.add-direction');
    }

    public function addDirection(Request $request)
    {

        $validated = $request->validate(
            [
                'libelle' => 'required',
                'code' => 'required',
                'dga' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "code.required" => "Ce champ est réquis",
                "dga.required" => "Ce champ est réquis",
            ]
        );
        // ENREGISTREMENT DANS LA DB
        Direction::create($request->all());

        return redirect()->back()->with('success','Direction ajoutée avec succès!');
    }

    public function getUpdateDirection (Direction $direction)
    {
        return view('admin.update-direction',compact(('direction')));
    }

    public function updateDirection(Request $request,$id)
    {
        $validated = $request->validate(
            [
                'libelle' => 'required',
                'code' => 'required',
                'dga' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "code.required" => "Ce champ est réquis",
                "dga.required" => "Ce champ est réquis",
            ]
        );

        // MODIFICATION DE LA DIRECTION DANS LA DB
        $direction = Direction::find($id);
        $direction->update($request->all());

        return redirect()->back()->with('success','Direction modifiée avec succès!');
    }


    public function showDirection(Direction $direction)
    {
        return view('know-more-direction',compact('direction'));
    }

    public function deleteDirection(Direction $direction)
    {
        $direction->delete();
        return redirect()->back()->with('success','Direction supprimée avec succès!');
    }
}
