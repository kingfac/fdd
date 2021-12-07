<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\nous;

class About extends Component
{
    public $nouss;
    public function mount($nous){
        $this->nouss = nous::find($nous);
    }
    public function render()
    {
        return view('livewire.client.about');
    }
}
