<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Create extends Component
{

    public Contact $contact; 


    public function mount(){
        $this->contact = new Contact();
    }

    protected $rules = [
        'contact.name' => "required|string",
        'contact.email' => "required|email",
        "contact.phone" => "required|digits:10",
        "contact.subject" => "required|string|max:255",
        "contact.message" => "required|string",
    ];


    public function sendForm(){
        $this->validate();
        try{
            $this->contact->save();
            session()->flash('success', "Le message a bien été envoyé.");
            redirect()->route('website.home');
        }catch(\Exception $error){
            dd($error->getMessage());
            session()->flash('error', "Un problème est survenu. Le message n'a pas été envoyé");
        }
    }


    public function render()
    {
        return view('livewire.contact.create');
    }
}
