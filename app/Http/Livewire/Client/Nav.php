<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\nous;

class Nav extends Component
{

    public $nouss;
    public function render()
    {
        $this->nouss = nous::all();
        return view('livewire.client.nav');
    }
}
