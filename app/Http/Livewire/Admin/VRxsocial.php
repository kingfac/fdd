<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\rxsocial;

class VRxsocial extends Component
{
    public $lib;
    public $lien;
    public $icon;
    public $selectedId;
    public $reseaux;

    public function render()
    {
        $this->reseaux = rxsocial::all();
        return view('livewire.admin.v-rxsocial');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'lien' => 'required',
            'icon' => 'required'
        ]); 

        $record = rxsocial::create($validate);

        session()->flash('message', 'rxsocial  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        $this->icon = '';
        $this->lien = '';
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->icon = $data['icon'];
        $this->lien = $data['lien'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = rxsocial::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'lien' => $this->lien,
            'icon' => $this->icon
        ]);
        session()->flash('message', 'rxsocial  mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = rxsocial::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'rxsocial  delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
