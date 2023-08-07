<?php

namespace App\Http\Livewire\Formation;

use App\Models\Formation;
use Livewire\Component;

class Index extends Component
{
    public $formations; 

    public function mount(){
        $this->formations = Formation::all(); 
    }


    public function deleteformation($id){
        try{
            $formation = Formation::find($id); 
            $formation->delete(); 
            session()->flash('success', "La formation a bien été supprimée."); 
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs"); 
        }
    }


    public function render()
    {
        return view('livewire.formation.index');
    }
}
