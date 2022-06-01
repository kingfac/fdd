<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\contact;

class VContact extends Component
{
    public $lib;
    public $type;
    public $icon;
    public $selectedId;
    public $contacts;

    public function render()
    {
        $this->contacts = contact::all();
        return view('livewire.admin.v-contact');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'type' => 'required',
            'icon' => 'required'
        ]); 

        $record = contact::create($validate);

        session()->flash('message', 'contact entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        $this->icon = '';
        $this->type = '';
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->icon = $data['icon'];
        $this->type = $data['type'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = contact::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'type' => $this->type,
            'icon' => $this->icon
        ]);
        session()->flash('message', 'contact entete mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = contact::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'contact entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
