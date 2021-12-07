<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\contact;

class Participer extends Component
{
    public $contacts;
    public function render()
    {
        $this->contacts = contact::all();
        return view('livewire.client.participer');
    }
}
