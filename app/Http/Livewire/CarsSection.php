<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class CarsSection extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        return view('livewire.cars-section', [
            'cars' => Car::where('title', 'like', '%'.$this->search.'%')->paginate(3)
        ]);
    }


}
