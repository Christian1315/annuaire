<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getServicesManage()
    {
        return view('admin.gestion-services');
    }

    public static function search($libelle)
    {
        return collect(Services::all())->filter(function($service) use ($libelle)
        {
            return Str::contains(strtolower($service['libelle']),strtolower($libelle));
        })->all();
    }

    public function getAddService()
    {
        return view('admin.add-service');
    }

    public function addService(Request $request)
    {

        $validated = $request->validate(
            [
                'libelle' => 'required',
                'departement' => 'required',
                'direction' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "departement.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
            ]
        );
        Services::create($request->all());

        return redirect()->back()->with('success','Service ajouté avec succès!');
    }

    public function getUpdateService(Services $service)
    {
        return view('admin.update-service',compact(('service')));
    }

    public function updateService(Request $request,$id)
    {
        $validated = $request->validate(
            [
                'libelle' => 'required',
                'departement' => 'required',
                'direction' => 'required',
            ],
            [
                "libelle.required" => "Ce champ est réquis",
                "departement.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
            ]
        );

        // MODIFICATION DU SERVICE DANS LA DB
        $service = Services::find($id);
        $service->update($request->all());

        return redirect()->back()->with('success','Service modifié avec succès!');
    }

    public function showService(Services $service)
    {
        return view('know-more-service',compact('service'));
    }

    public function deleteService(Services $service)
    {
        $service->delete();
        return redirect()->back()->with('success','Service supprimé avec succès!');
    }
}
