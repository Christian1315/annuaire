<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Controllers\ServicesController;
use App\Models\Services;

class SearchService extends Component
{
    use WithPagination;
    
    public $name;
    public $search;
    
    public $error='';
    
    public $results = [];
    
    public $servicesCount;
    
    public function mount()
    {
        $this->servicesCount = count(Services::all());
    }
    
    public function updatedName($value)
    {
        $this->search=True;
        $this->results =  ServicesController::search($value);

        if (count($this->results)==0) {
            $this->error = "Aucun résultat trouvé";
        }
        
    }

    public function render()
    {
        return view('livewire.search-service',[
            "services"=>Services::orderBy('id','desc')->paginate(4),
        ]);
    }
}
