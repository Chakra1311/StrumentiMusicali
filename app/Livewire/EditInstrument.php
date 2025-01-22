<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Instrument;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EditInstrument extends Component
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
    public $categorySelect;
    public $instrumentCategory;

    public $image;

    public $oldImage;

    public $idInstrument;
    public function mount($idInstrument){
        $instrument=Instrument::find($idInstrument);
        $this->brand=$instrument->brand;
        $this->model=$instrument->model;
        $this->price=$instrument->price;
        $this->description=$instrument->description;
        $this->instrumentCategory=$instrument->categories;
        $this->oldImage=$instrument->image;
        $this->idInstrument=$instrument->id;
        
    }
    public function updateInstrument(){
        // $this->validate();

        $instrument=Instrument::find($this->idInstrument);
        $instrument->update([
            'brand' => $this->brand,    
            'model' => $this->model,
            'price' => $this->price,
            'description' => $this->description,
            'image'=> $this->image ? $this->image->store('images', 'public') : $instrument->image
        ]);
        $instrument->categories()->sync($this->categorySelect);

        return redirect(route('instrument.index'));
        
      
    }
    public function render()
    {
        $allCategories=Category::all();
        return view('livewire.edit-instrument', ['oldImage' => $this->oldImage, 'allCategories'=>$allCategories, 'instrumentCategory'=>$this->instrumentCategory ]);
    }
}
