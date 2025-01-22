<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Instrument;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateInstrument extends Component
{
    use WithFileUploads;
    
    #[Validate('required')] 
    public $brand;
    
    #[Validate('required')] 
    public $model;
    
    #[Validate('required|numeric|min:0')] 
    public $price;
    
    #[Validate('required|min:3')] 
    public $description;

    #[Validate('required')] 
    public $image;
   
    #[Validate('required')]
    public $categorySelect;
    public function createInstrument(){

        $this->validate();

       
      $instrument=  Auth::user()->instruments()->create([
            'brand' => $this->brand,
            'model' => $this->model,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image->store('images', 'public'), 
        ]);

        foreach($this->categorySelect as $category){
            $instrument->categories()->attach($category);
        }


        $this->reset();
    }

 

    public function render()
    {
        $allCategories=Category::all();
        return view('livewire.create-instrument', compact('allCategories'));
    }
}
