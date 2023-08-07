<?php

namespace App\Http\Livewire\Formation;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads; 

    public $formation ; 
    public $content, $pic ; 
    public function mount($formation){
        $this->content = $formation->desc;
    }

    protected $rules = [
        "formation.name" => "required|string"
    ];

    protected $listeners = [
        'updateFormation' => "updateFormation"
    ]; 

    public function updateFormation(){
        // dd('ll');
        $this->validate(); 
        try{
            
            // update the desc
            $this->formation->desc = $this->content ; 

            // Process Thumbnail image
            if(! is_null($this->pic)){
                // new thumbnail
                $url  = $this->pic->store('formation');
                $this->formation->picture = $url ; 
            }

            // save to the db
            $this->formation->save(); 
            session()->flash('success', "la réalisation a bien été modifier");

        }catch(\Exception $error){
            // error occured
            session()->flash('error', "Un problème est survenu, Contactez une developpeurs.");
        }
    }

    public function render()
    {
        return view('livewire.formation.edit');
    }
}
