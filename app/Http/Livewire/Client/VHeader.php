<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\header;
use Illiminate\Support\Facades\Storage;

class VHeader extends Component
{
    public $headers;

    public function render()
    {
        $this->headers = header::all();
        return view('livewire.client.v-header');
    }
}
