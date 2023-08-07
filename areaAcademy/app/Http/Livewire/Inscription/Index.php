<?php

namespace App\Http\Livewire\Inscription;

use App\Models\Student;
use Livewire\Component;

class Index extends Component
{

    public $students; 

    public function mount(){
        $this->students = Student::all(); 
    }


    public function deleteStudent($id){
        try{
            $student = Student::find($id); 
            $student->delete(); 
            session()->flash('success', "Le contact a bien été supprimée."); 
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs"); 
        }
    }


    public function render()
    {
        return view('livewire.inscription.index');
    }
}
