<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VPartenaire extends Component
{

    public $parts = [1,2,3,4,5];
    public function render()
    {
        return view('livewire.client.v-partenaire');
    }
}
