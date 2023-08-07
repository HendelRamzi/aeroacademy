<?php

namespace App\Http\Livewire\Formation;

use Livewire\Component;

class Description extends Component
{

    public $formation ; 
    public $content ;



    public function mount(){
        $json = json_decode( $this->formation->desc , true);
        $this->content = $json['blocks'] ;
    }


    public function render()
    {
        return view('livewire.formation.description');
    }
}
