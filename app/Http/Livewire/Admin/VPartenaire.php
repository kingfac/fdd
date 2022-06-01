<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\partenaire;

use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VPartenaire extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $photo;
    public $lib;
    public $lien;
    public $partenaires;

    public function render()
    {
        $this->partenaires = partenaire::all();
        return view('livewire.admin.v-partenaire');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'lien' => 'required',
        ]);

        
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $record = partenaire::create($validate);

        $this->photo->storePubliclyAs('public/partenaire/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/partenaires/', $data->id.'.png' );
        session()->flash('message', 'partenaire entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        $this->lien = '';
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->lien = $data['lien'];
        $this->selectedId = $data['id'];
    }


    public function update(){
        $record = partenaire::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'lien' => $this->lien,
        ]);

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/partenaire/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }
        session()->flash('message', 'partenaire entete mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = partenaire::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'partenaire entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/partenaire/', $this->selectedId.'.png');
        Storage::delete('public/partenaire/'.$this->selectedId.'.png');   
        $this->resetFields();
    }
}
