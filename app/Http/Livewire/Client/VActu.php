<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\actu;
use Illiminate\Support\Facades\Storage;

class VActu extends Component
{
    public $actus;
    public function render()
    {
        $this->actus = actu::all();
        return view('livewire.client.v-actu');
    }
}
