<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notifU : false
}">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex flex-col justify-end">
        <h1 class="py-2 text-lg font-bold text-right">RAPPORTS</h1>
        @if ($errors->any())
        <div class="p-2 bg-red-300 ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <div class="flex-col gap-4"
            x-data="{ isUploading : false, progress : 0 }"
            x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" 
            x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <div class="flex items-center justify-center gap-3 by-5">
                <div class="flex flex-1 gap-5 py-5">
                    <div class="flex flex-col flex-1 gap-3">
                        <input type="text" class="flex-1 w-full p-2 placeholder-gray-700 border-2 rounded-lg" placeholder="titre" id="titre" wire:model="titre">
                        <textarea name="" id="" wire:model="descri" class="flex-1 w-full p-2 placeholder-gray-600 transition transform border rounded-lg" placeholder="Description"></textarea>
                        <label class="flex items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span class="px-3 mt-2 text-base leading-normal">Parcourir le fichier</span>
                            <input type='file' class="hidden" wire:model="pdf" />
                            <div x-show="isUploading" class="h-full">
                                <progress max="100" x-bind:value="progress">
                                    <b x-text="progress"></b>%
                                </progress>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 bg-white">
                    <button class="px-3 py-2 text-lg font-bold text-white bg-green-600" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                    <button class="px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                    <button class="px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                    <button class="text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="descri='';titre='';id=0">Clear</button>        
                </div>
            </div>
            <div class="grid flex-1 grid-cols-3 gap-3 mt-3">
                @if ($pdf)
                <a class="flex flex-col justify-center p-2 text-center shadow" href="#">
                    {{-- <img src="{{ $pdf->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="flex-1"> --}}                    
                    <embed src="{{ $pdf->temporaryUrl() }}" {{-- width="600px" height="500px" --}} />
                    <h1 class="text-lg font-bold bg-red-400">Previsualiser le fichier</h1>
                </a>
                @endif
                @foreach ($rapports as $cpt)
                    <a class="flex flex-col justify-center p-2 text-center shadow" wire:click="charger({{$cpt}})">
                        @if (Storage::exists('public/rapport/'.$cpt->id.'.pdf'))    
                            {{-- <img src="{{asset('storage/rapport/'.$cpt->id.'.pdf')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="flex-1"> --}}
                            <embed src="{{asset('storage/rapport/'.$cpt->id.'.pdf')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="flex-1" />
                        @endif
                        <h1 class="text-lg font-bold text-left">titre : {{$cpt->titre}}</h1>
                        <p class="flex flex-col text-left">
                            <b class="py-1 text-white bg-green-600">Description</b>
                            <p class="flex-1 py-1 text-justify">{{$cpt->descri}}</p>
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="absolute top-0 left-0 flex items-center justify-center w-screen h-screen gap-10 p-5 text-white black-transparent" x-show="modal" @click="modal=false;" x-transition.500ms>
        <div class="flex flex-col items-center justify-center gap-10 p-5 black-transparent" >
            <div>
                <h1 class="text-2xl font-bold">Message de confirmation</h1>
                <hr>
            </div>
            <p class="px-20 text-xl">
                <span x-text="message"></span>
                <span x-show="save">enregistrer</span>
                <span x-show="update">modifier</span>
                <span x-show="del">supprimer</span>
            </p>
            <hr>
            <div class="flex w-full p-2">
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900 hover:bg-blue-700"   x-show="save" wire:click="store">Enregistrer</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600 hover:bg-yellow-400"   x-show="update" wire:click="update">Modifier</button>        
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900 hover:bg-red-700"  x-show="del" wire:click="del">Supprimer</button>
                <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-gray-500 hover:bg-gray-700" >Annuler</button>
            </div>
        </div>
        <div class="">
            <h1 class="font-extrabold text-9xl">?</h1>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full bg-black cacher" id="notif">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    {{-- @if (session()->has('message'))
    @endif --}}

    <script>
        var a = document.querySelector('#notif');
        a.style.transform = "scale(0)";
        window.addEventListener('Updated', event => {
            a.style.transform = "scale(0.2)";
            setTimeout(() => {
                a.style.transform = "scale(0.6)";
                setTimeout(() => {
                    a.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                a.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>
</div>