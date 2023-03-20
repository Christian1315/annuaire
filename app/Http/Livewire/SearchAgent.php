<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Agent;
use Livewire\WithPagination;
use App\Http\Controllers\AgentController;

class SearchAgent extends Component
{
    use WithPagination;
    
    public $name;
    public $nameNull;
    public $search;

    
    public $error='';
    
    public $results = [];
    
    public $agentsCount;
    
    public function mount()
    {
        $this->agentsCount = count(Agent::all());
        // $this->nameNull = $this->name==''?TRUE:FALSE;
    }
    
    public function updatedName($value)
    {
        $this->search=True;
        $this->nameNull = $this->name==''?true:false;
        $this->results =  AgentController::search($value);
    
        if (count($this->results)==0) {
            $this->error = "Aucun résultat trouvé";
        }
    }

    public function render()
    {
        return view('livewire.search-agent',[
            "agents"=>Agent::orderBy('id','desc')->paginate(4),
        ]);
    }
}
