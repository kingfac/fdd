<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\domaine;

use Illiminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VDomaine extends Component
{
    use WithFileUploads;
    public $lib;
    public $selectedId;
    public $descri;
    public $domaines;
    public $new_sous;
    public $sous = [];
    public $photo;

    public function render()
    {
        $this->domaines = domaine::all();
        return view('livewire.admin.v-domaine');
    }

    public function store(){
        $validate = $this->validate([
            'lib' => 'required',
            'descri' => 'required',
            'sous' => 'required',
        ]); 

        $validate2 = $this->validate([
            'photo'=>'required'
        ]);
        
        
        $record = domaine::create($validate);
        $this->photo->storePubliclyAs('public/domaine/', $record->id.'.png');

        session()->flash('message', 'domaine enregistré avec succès');
        $this->emit('Added');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();

    }

    public function resetFields(){
        $this->lib = '';
        $this->descri = '';
        $this->sous = [];
    }

    public function charger($data){
        $this->lib = $data['lib'];
        $this->descri = $data['descri'];
        if(is_array($data['sous'])) $this->sous = $data['sous'];
        $this->selectedId = $data['id'];
    }

    public function update(){
        $record = domaine::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'descri' => $this->descri,
            'sous' => $this->sous,
        ]);

        if(!empty($this->photo)){
            $this->photo->storePubliclyAs('public/domaine/', $this->selectedId.'.png');
            $this->emitSelf('imgUpdate');
        }
        session()->flash('message', 'domaine mise à jour avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    public function del(){
        $record = domaine::find($this->selectedId);
        $record->delete();
        Storage::delete('public/domaine/'.$this->selectedId.'.png');   
        session()->flash('message', 'domaine delete avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
        $this->resetFields();
    }

    public function add(){
        if(isset($this->new_sous) && !empty($this->new_sous)){
            array_push($this->sous, $this->new_sous);
            $this->new_sous = '';
        }
    }

    public function sup($index){
        array_splice($this->sous, $index, 1);
    }
}

