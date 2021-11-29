<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VDomaine extends Component
{
    public $domaines = [1,2,3,4,5,3];
    public function render()
    {
        return view('livewire.client.v-domaine');
    }
}
