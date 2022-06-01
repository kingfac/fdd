<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\actu;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VActu extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $photo;
    public $titre;
    public $lien;
    public $descri;
    public $actus;

    public function render()
    {
        $this->actus = actu::all();
        return view('livewire.admin.v-actu');
    }

    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
            'lien' => 'required',
            'descri' => 'required'
        ]);

        
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $record = actu::create($validate);

        $this->photo->storePubliclyAs('public/actu/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/actus/', $data->id.'.png' );
        session()->flash('message', 'actu entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->titre = '';
        $this->descri = '';
        $this->lien = '';
    }

    public function charger($data){
        $this->titre = $data['titre'];
        $this->descri = $data['descri'];
        $this->lien = $data['lien'];
        $this->selectedId = $data['id'];
    }


    public function update(){
        $record = actu::find($this->selectedId);
        $record->update([
            'titre' => $this->titre,
            'lien' => $this->lien,
            'descri' => $this->descri
        ]);

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/actu/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }
        session()->flash('message', 'actu entete mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = actu::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'actu entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/actu/', $this->selectedId.'.png');
        Storage::delete('public/actu/'.$this->selectedId.'.png');   
        $this->resetFields();
    }
}
