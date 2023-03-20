<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Departement;
use App\Models\Direction;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAgentManage()
    {
        return view('admin.gestion-agents');
    }

    public function getAddAgent()
    {
        return view('admin.add-agent');
    }

    public function addAgent(Request $request)
    {

        $validated = $request->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'poste' => 'required',
                'direct_ligne' => 'required',
                'portable' => 'required',
                'email' => "required",
                'fonction' => 'required',
                'service' => 'required',
                'direction' => 'required',
                'dga' => 'required',
                'sous_service' => 'required',
                'departement' => 'required',
            ],
            [
                "nom.required" => "Ce champ est réquis",
                "prenom.required" => "Ce champ est réquis",
                "poste.required" => "Ce champ est réquis",
                "direct_ligne.required" => "Ce champ est réquis",
                "portable.required" => "Ce champ est réquis",

                "email.required" => "Ce champ est réquis",

                "fonction.required" => "Ce champ est réquis",
                "service.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
                "dga.required" => "Ce champ est réquis",
                "sous_service.required" => "Ce champ est réquis",
                "departement.required" => "Ce champ est réquis",
            ]
        );
        // ENREGISTREMENT DE L'AGENT DANS LA DB
        Agent::create($request->all());

        return redirect('/add-agent')->with('success','Agent ajouté avec succès!');
    }

    public static function search($name)
    {
        return collect(Agent::all())->filter(function($agent) use ($name)
        {
            return Str::contains(strtolower($agent['nom']),strtolower($name)) or 
                Str::contains(strtolower($agent['prenom']),strtolower($name)) or
                Str::contains(strtolower($agent['poste']),strtolower($name)) or
                Str::contains(strtolower($agent['portable']),strtolower($name)) or
                Str::contains(strtolower($agent['direction']),strtolower($name));
        })->all();
    }

    public static function searchPanel($name)
    {
        $agentSearch =  collect(Agent::all())->filter(function($agent) use ($name)
        {
            return Str::contains(strtolower($agent['nom']),strtolower($name)) or 
                Str::contains(strtolower($agent['prenom']),strtolower($name)) or
                Str::contains(strtolower($agent['poste']),strtolower($name)) or
                Str::contains(strtolower($agent['portable']),strtolower($name)) or
                Str::contains(strtolower($agent['direction']),strtolower($name)) or
                Str::contains(strtolower($agent['status']),strtolower($name));
        })->all();

        $serviceSearch =  collect(Services::all())->filter(function($service) use ($name)
        {
            return Str::contains(strtolower($service['libelle']),strtolower($name)) or
            Str::contains(strtolower($service['status']),strtolower($name));
        })->all();

        $directionSearch =  collect(Direction::all())->filter(function($direction) use ($name)
        {
            return Str::contains(strtolower($direction['libelle']),strtolower($name)) or
            Str::contains(strtolower($direction['status']),strtolower($name));
        })->all();

        $departementSearch =  collect(Departement::all())->filter(function($departement) use ($name)
        {
            return Str::contains(strtolower($departement['libelle']),strtolower($name)) or
            Str::contains(strtolower($departement['status']),strtolower($name));
        })->all();

        return count($agentSearch)>0? $agentSearch:(count($serviceSearch)>0?$serviceSearch:(count($departementSearch)>0?$departementSearch:(count($directionSearch)>0?$directionSearch:[])));

    }

    public function getUpdateAgent(Agent $agent)
    {
        return view('admin.update-agent',compact(('agent')));
    }

    public function updateAgent(Request $request,$id)
    {
        $validated = $request->validate(
            [
                'nom' => 'required',
                'prenom' => 'required',
                'poste' => 'required',
                'direct_ligne' => 'required',
                'portable' => 'required',
                'email' => 'required',
                'fonction' => 'required',
                'service' => 'required',
                'direction' => 'required',
                'dga' => 'required',
                'sous_service' => 'required',
                'departement' => 'required',
            ],
            [
                "nom.required" => "Ce champ est réquis",
                "prenom.required" => "Ce champ est réquis",
                "poste.required" => "Ce champ est réquis",
                "direct_ligne.required" => "Ce champ est réquis",
                "portable.required" => "Ce champ est réquis",

                "email.required" => "Ce champ est réquis",
                "email.unique" => "Un agent est déjà enregistré au nom de ce mail",

                "fonction.required" => "Ce champ est réquis",
                "service.required" => "Ce champ est réquis",
                "direction.required" => "Ce champ est réquis",
                "dga.required" => "Ce champ est réquis",
                "sous_service.required" => "Ce champ est réquis",
                "departement.required" => "Ce champ est réquis",
            ]
        );

        // MODIFICATION DE L'AGENT DANS LA DB
        $agent = Agent::find($id);
        $agent->update($request->all());

        return redirect()->back()->with('success','Agent modifié avec succès!');
    }

    public function showAgent(Agent $agent)
    {
        return view('know-more-agent',compact('agent'));
    }

    public function deleteAgent(Agent $agent)
    {
        // dd($agent);
        $agent->delete();
        return redirect()->back()->with('success','Agent supprimé avec succès!');
    }
}
