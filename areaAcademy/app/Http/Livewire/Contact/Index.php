<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Index extends Component
{

    public $contacts ; 

    public function mount(){
        $this->contacts = Contact::all(); 
    }

    public function deleteContact($id){
        try{
            $contact = Contact::find($id); 
            $contact->delete(); 
            session()->flash('success', "Le contact a bien été supprimée."); 
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs"); 
        }
    }

    public function render()
    {
        return view('livewire.contact.index');
    }
}
