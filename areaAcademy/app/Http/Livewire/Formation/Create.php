<?php

namespace App\Http\Livewire\Formation;

use App\Models\Formation;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;

    public Formation $formation; 
    public $pic, $desc; 

    public function mount(){
        $this->formation = new Formation(); 
    }


    protected $rules = [
        'formation.name' => "required|string",
        "desc" => "required|string",
        "pic" => "required|image",
    ];


    protected $listeners = [
        'addFormation' => "addFormation",
    ];



    public function addFormation(){
        // dd(Str::slug($this->formation->name, '-'));
        $this->validate(); 
        try{

            // process the formation.desc
            $this->formation->desc = $this->desc ; 


            // process the picture
            $thumb_url = $this->pic->store('formation');
            $this->formation->picture = $thumb_url ;


            // Handle the slug
            $this->formation->slug = Str::slug($this->formation->name, '-');


            // Store in the db
            $this->formation->save(); 

            session()->flash('success', "La formation a bien été créé");

        }catch(\Exception $e){
            session()->flash('error', $e->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.formation.create');
    }
}
