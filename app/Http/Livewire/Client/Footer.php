<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

use App\Models\infosite;
use App\Models\rxsocial;
use Illiminate\Support\Facades\Storage;

class Footer extends Component
{
    public $infos;
    public $reseaux;

    public function render()
    {
        $this->infos = infosite::all();
        $this->reseaux = rxsocial::all();
        return view('livewire.client.footer');
    }
}
