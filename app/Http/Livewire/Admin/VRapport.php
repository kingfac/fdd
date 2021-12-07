<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\rapport;

use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VRapport extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $pdf;
    public $titre;
    public $descri;
    public $rapports;


    public function render()
    {
        $this->rapports = rapport::all(); 
        return view('livewire.admin.v-rapport');
    }

    public function store(){
        $validate = $this->validate([
            'titre' => 'required',
            'descri' => 'required',
        ]);

        
        $validate2 = $this->validate([
            'pdf'=>'required'
        ]);
        $record = rapport::create($validate);

        $this->pdf->storePubliclyAs('public/rapport/', $record->id.'.pdf');
        //$this->pdfs[$index]->storePubliclyAs('public/rapports/', $data->id.'.pdf' );
        session()->flash('message', 'rapport  enregistré avec succès');
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
        $record = rapport::find($this->selectedId);
        $record->update([
            'titre' => $this->titre,
            'descri' => $this->descri,
        ]);

        if(!empty($this->pdf)){
            $this->pdf->storePubliclyAs('public/rapport/', $this->selectedId.'.pdf');
            $this->emitSelf('imgUpdate');
        }
        session()->flash('message', 'rapport  mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = rapport::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'rapport  delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/rapport/', $this->selectedId.'.pdf');
        Storage::delete('public/rapport/'.$this->selectedId.'.pdf');   
        $this->resetFields();
    }

    
}
