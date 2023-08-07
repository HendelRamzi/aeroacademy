<?php

namespace App\Http\Livewire\Contact;

use App\Models\Formation;
use App\Models\Student;
use Livewire\Component;

class Inscription extends Component
{

    public $formations; 

    public $forms = [], $englais, $genre, $ddn, $nation,
        $ville, $pays, $education
    ; 


    protected $information = [];
    public Student $student ; 



    protected $rules = [
        'student.first_name' => "required",
        'student.last_name' => "required",
        'student.email' => "required|email",
        'student.phone' => "required|digits:10",
        'student.address' => "required|string|max:255",


        // Additionnal informations
        "genre"=> "required",
        "nation"=> "required|string|max:255",
        "ddn"=> "required",
        "englais"=> "required",
        "forms"=> "required|string|max:255",
        "forms,*"=> "required|string|max:255",
        "ville"=> "required|string|max:255",
        "pays"=> "required|string|max:255",
        "education"=> "required|string|max:255",
    ];

    public function mount(){
        $this->formations = Formation::all(); 
        $this->student = new Student();
    }


    public function sendForm(){
        // dd($this->englais); 
        $this->validate();
        try{

            // Setup the information
            $this->information = [
                'ville' => $this->ville,
                'genre' => $this->genre,
                'pays' => $this->pays,
                'education' => $this->education,
                'forms' => $this->forms,
                'englais' => $this->englais,
                'ddn' => $this->ddn,
                'nation' => $this->nation,
            ];


            // fill the model 
            $this->student->form = json_encode($this->information); 


            // save into the db
            $this->student->save();

            session()->flash('success', "Merci d'avoir envoyé le formulaire.
                Un email de confirmation vous sera envoyé lors de la reception de votre insctiption.
                Nous vous contacterons des que possible.
            "); 


            redirect()->route('website.vous-inscrire'); 


            // Send an email saying that the inscription was sent successfuly


        }catch(\Exception $error){
            session()->flash('error', "Un problem est survenu, l'inscription n'a pas été envoyée."); 
            // dd($error->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.contact.inscription');
    }
}
