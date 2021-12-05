<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\nous;

class VNous extends Component
{
    public $titre;
    public $sous;
    public $contenu;
    public $selectedId;
    public $nouss;

    public function render()
    {
        $this->nouss = nous::all();
        return view('livewire.admin.v-nous');
    }

    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
            'sous' => 'required',
            'contenu' => 'required'
        ]); 

        $record = nous::create($validate);

        session()->flash('message', 'nous entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = '';
        $this->contenu = '';
        $this->sous = '';
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->contenu = $data['contenu'];
        $this->sous = $data['sous'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = nous::find($this->selectedId);
        $record->update([
            'titre' => $this->titre,
            'sous' => $this->sous,
            'contenu' => $this->contenu
        ]);
        session()->flash('message', 'nous entete mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = nous::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'nous entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }
}
