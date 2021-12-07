<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\compte;
use Illiminate\Support\Facades\Storage;

class Don extends Component
{
    public $comptes;
    public function render()
    {
        $this->comptes = compte::all();
        return view('livewire.client.don');
    }
}
