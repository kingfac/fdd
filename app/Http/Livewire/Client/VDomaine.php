<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\domaine;

class VDomaine extends Component
{
    public $domaines;
    public function render()
    {
        $this->domaines = domaine::all();
        return view('livewire.client.v-domaine');
    }
}
