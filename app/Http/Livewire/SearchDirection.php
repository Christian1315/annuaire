<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use App\Http\Controllers\DirectionController;
use App\Models\Direction;
use Livewire\Component;

class SearchDirection extends Component
{
    use WithPagination;
    
    public $name;
    public $search;
    
    public $error='';
    
    public $results = [];
    
    public $directionsCount;
    
    public function mount()
    {
        $this->directionsCount = count(Direction::all());
    }

    public function updatedName($value)
    {
        $this->search=True;
        $this->results =  DirectionController::search($value);

        if (count($this->results)==0) {
            $this->error = "Aucun résultat trouvé";
        }
    }

    public function render()
    {
        return view('livewire.search-direction',[
            "directions"=>Direction::orderBy('id','desc')->paginate(4),
        ]);
    }
}
