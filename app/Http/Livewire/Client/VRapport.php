<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\rapport;

use Illiminate\Support\Facades\Storage;

class VRapport extends Component
{
    public $rapports;

    public function render()
    {
        $this->rapports = [1,2,3];//rapport::all(); 
        return view('livewire.client.v-rapport');
    }
}
