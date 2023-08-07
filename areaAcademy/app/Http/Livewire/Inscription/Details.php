<?php

namespace App\Http\Livewire\Inscription;

use Livewire\Component;

class Details extends Component
{

    public $student;

    public $info;


    public function mount($student){
        $this->info = json_decode($student->form, true ); 
        // dd($this->info); 
    }



    public function deleteStudent(){
        try{
            $this->student->delete(); 
            session()->flash('success', "L'inscription a bien été supprimée");
            redirect()->route('admin.inscriptions.index'); 
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs");
        }
    }

    public function render()
    {
        return view('livewire.inscription.details');
    }
}
