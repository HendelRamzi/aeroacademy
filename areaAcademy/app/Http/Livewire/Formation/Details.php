<?php

namespace App\Http\Livewire\Formation;

use Livewire\Component;

class Details extends Component
{

    public $formation; 
    public $content; 



    public function mount($formation){
        $this->content = $formation->desc; 
    }


    public function deleteFormation(){
        try{
            $this->formation->delete(); 
            session()->flush('success', "La formation a bien été supprimée."); 
            redirect()->route('admin.formations.index'); 
        }catch(\Exception $error){
            session()->flush('error', "Un problème est survenu. Contactez les developpeurs"); 
        }
    }

    protected $rules = [
        'formation.name' => 'required',
        // "formation.desc" => "required",
        // "formation.picture" => "required"
    ];


    public function render()
    {
        return view('livewire.formation.details');
    }
}
