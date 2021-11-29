<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VActu extends Component
{
    public $actus = [1,3,4];
    public function render()
    {
        return view('livewire.client.v-actu');
    }
}
