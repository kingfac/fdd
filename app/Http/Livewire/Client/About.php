<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\nous;

class About extends Component
{
    public $nouss;
    public $suivant;
    public function mount($nous){
        $this->nouss = nous::find($nous);
    }
    public function render()
    {
        $this->suivant = nous::find(($this->nouss['id'] < 3) ? $this->nouss['id']+1 : 1);
        return view('livewire.client.about');
    }
}
