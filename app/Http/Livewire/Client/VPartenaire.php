<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\partenaire;
use Illiminate\Support\Facades\Storage;

class VPartenaire extends Component
{

    public $parts;
    public function render()
    {
        $this->parts = partenaire::all();
        return view('livewire.client.v-partenaire');
    }
}
