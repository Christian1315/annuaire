<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AgentController;
use App\Models\Agent;
use Livewire\Component;
// use Livewire\WithPagination;


class SearchPanel extends Component
{
    // use WithPagination;

    public $name;
    
    public $error='';
    public $title='Recherche annuaire Interne';
    
    public $results = [];
    
    public $resultsCount;
    
    // public function mount()
    // {
    //     $this->resultsCount = count($this->results);
    // }

    public function updatedName($value)
    {
        $this->title = 'Résultat de recherche';
        $this->results =  AgentController::searchPanel($value);

        $this->resultsCount = count($this->results);

        if ($this->resultsCount==0) {
            $this->error = "Aucun résultat trouvé";
        }
    }

    public function render()
    {
        return view('livewire.search-panel');
    }
}
