<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\service;

class VService extends Component
{
    
    public $services;

    public function render()
    {
        $this->services = service::all();
        return view('livewire.client.v-service');
    }

}
