<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\header;

use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class VHeader extends Component
{

    use WithFileUploads;
    public $selectedId;
    public $photo;
    public $lib;
    public $lastlib;
    public $headers;



    public function render()
    {

        $this->headers = header::all();
        return view('livewire.admin.v-header');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
        ]);

        
        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        $record = header::create($validate);

        $this->photo->storePubliclyAs('public/header/', $record->id.'.png');
        //$this->photos[$index]->storePubliclyAs('public/headers/', $data->id.'.png' );
        session()->flash('message', 'header entete enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        //Artisan::call('cache:clear');
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->lastlib = $data['lib'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $upd = 0;

        if($this->lib != $this->lastlib){
            $record = header::find($this->selectedId);
            $record->update(['lib' => $this->lib]);
            $upd++;
        }

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/header/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
            $upd++;
        }

        if($upd > 0){
            session()->flash('message', 'header entete mise à jour avec succès');
            $this->emit('Updated');
            $this->dispatchBrowserEvent('Updated');
        }
        $this->resetFields();
    }

    public function del(){
        $record = header::find($this->selectedId);
        $record->delete();
        session()->flash('message', 'header entete delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        ///$this->Store->storePubliclyAs('public/header/', $this->selectedId.'.png');
        Storage::delete('public/header/'.$this->selectedId.'.png');   
        $this->resetFields();
    }

}
