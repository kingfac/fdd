<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\compte;

use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VCompte extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $photo;
    public $nom;
    public $numero;
    public $comptes;

    public function render()
    {
        $this->comptes = compte::all();
        return view('livewire.admin.v-compte');
    }
    public function store(){
        $validate = $this->validate([
            'nom' => 'required',
            'numero' => 'required',
        ]);

        
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $record = compte::create($validate);

        $this->photo->storePubliclyAs('public/compte/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/comptes/', $data->id.'.png' );
        session()->flash('message', 'compte  enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->nom = '';
        $this->numero = '';
    }

    public function charger($data){
        $this->nom = $data['nom'];
        $this->numero = $data['numero'];
        $this->selectedId = $data['id'];
    }


    public function update(){
        $record = compte::find($this->selectedId);
        $record->update([
            'nom' => $this->nom,
            'numero' => $this->numero,
        ]);

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/compte/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }
        session()->flash('message', 'compte  mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = compte::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'compte  delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/compte/', $this->selectedId.'.png');
        Storage::delete('public/compte/'.$this->selectedId.'.png');   
        $this->resetFields();
    }
}
