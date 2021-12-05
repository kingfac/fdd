<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Don extends Component
{
    public $comptes = [1,2,3];
    public function render()
    {
        return view('livewire.client.don');
    }
}
