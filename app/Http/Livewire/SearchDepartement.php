<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Http\Controllers\DepartementController;
use App\Models\Departement;
use Livewire\Component;

class SearchDepartement extends Component
{

    use WithPagination;
    
    public $name;
    public $search;

    public $error='';
    
    public $results = [];
    
    public $departementsCount;
    
    public function mount()
    {
        $this->departementsCount = count(Departement::all());
    }

    public function updatedName($value)
    {
        $this->search=True;
        $this->results =  DepartementController::search($value);

        if (count($this->results)==0) {
            $this->error = "Aucun résultat trouvé";
        }
    }

    public function render()
    {
        return view('livewire.search-departement',[
            "departements"=>Departement::orderBy('id','desc')->paginate(4),
        ]);
    }
}
