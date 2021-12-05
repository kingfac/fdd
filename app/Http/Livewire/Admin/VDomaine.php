<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\domaine;

class VDomaine extends Component
{
    public $lib;
    public $selectedId;
    public $descri;
    public $domaines;

    public function render()
    {
        $this->domaines = domaine::all();
        return view('livewire.admin.v-domaine');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'descri' => 'required',
        ]); 

        $record = domaine::create($validate);

        session()->flash('message', 'domaine enregistré avec succès');
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
        $record = domaine::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'descri' => $this->descri,
        ]);
        session()->flash('message', 'domaine mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = domaine::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'domaine delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
