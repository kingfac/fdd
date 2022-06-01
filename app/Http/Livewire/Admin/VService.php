<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\service; 

class VService extends Component
{
    public $lib;
    public $selectedId;
    public $descri;
    public $services;

    public function render()
    {
        $this->services = service::all();
        return view('livewire.admin.v-service');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'descri' => 'required',
        ]); 

        $record = service::create($validate);

        session()->flash('message', 'service enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        $this->descri = '';
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->descri = $data['descri'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = service::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'descri' => $this->descri,
        ]);
        session()->flash('message', 'service mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = service::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'service delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
