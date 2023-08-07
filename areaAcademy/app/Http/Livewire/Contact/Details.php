<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Details extends Component
{

    public $contact; 



    public function deleteContact(){
        try{
            $this->contact->delete();
            session()->flash('success', "le contact a bien été supprimé.");
            redirect()->route('admin.contacts.index');
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs.");
        }
    }




    public function render()
    {
        return view('livewire.contact.details');
    }
}
