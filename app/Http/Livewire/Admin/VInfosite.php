<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\infosite; 


use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VInfosite extends Component
{

    use WithFileUploads;
    public $titre;
    public $selectedId;
    public $photo;
    public $descri;
    public $infos;

    public function render()
    {
        $this->infos = infosite::all();
        return view('livewire.admin.v-infosite');
    }
    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
            'descri' => 'required',
        ]); 

        $record = infosite::create($validate);

        session()->flash('message', 'infosite enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = '';
        $this->descri = '';
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->descri = $data['descri'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = infosite::find($this->selectedId);
        $record->update([
            'titre' => $this->titre,
            'descri' => $this->descri,
        ]);
        session()->flash('message', 'infosite mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = infosite::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'infosite delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }

    public function profil(){
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $this->photo->storePubliclyAs('public/profil/','ceo.png');
        $this->resetFields();
        
        //$this->photos[$index]->storePubliclyAs('public/actus/', $data->id.'.png' );
        session()->flash('message', 'profil enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }
}
