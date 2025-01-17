<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Instrument;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateInstrument extends Component
{
    use WithFileUploads;
    
    #[Validate('required|')] 
    public $brand;
    
    #[Validate('required|')] 
    public $model;
    
    #[Validate('required|numeric|min:0')] 
    public $price;
    
    #[Validate('required|min:3')] 
    public $description;

    #[Validate('required|')] 
    public $image;

    public function createInstrument(){

        $this->validate();

        Instrument::create([
            'brand' => $this->brand,
            'model' => $this->model,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image->store('images', 'public'), 
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-instrument');
    }
}
