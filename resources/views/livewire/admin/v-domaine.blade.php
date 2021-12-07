<div x-data="{
    modal : false,
    message : 'Êtes-vous sûr de vouloir ',
    save : true,
    update : false,
    del : false,
    notif : false
}" class="px-5">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="px-5 py-5">
        <div class="flex flex-col gap-4 divide-y-2">
            <div class="p-2">   
                <h1 class="text-xl font-bold text-right divide-x-4 divide-gray-300">Secteurs d'activité</h1>
                <div class="flex flex-col py-5"
                x-data="{ isUploading : false, progress : 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false" 
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <div class="grid grid-cols-3 gap-4 py-2">
                        {{-- Form --}}
                        <div class="flex flex-col flex-1 gap-2">
                            <input type="text" class="p-1 placeholder-gray-700 border-2 rounded-lg" placeholder="Nom / Titre" id="lib" wire:model="lib">
                            <textarea name="h" id="descri" wire:model="descri" class="flex-1 p-1 placeholder-gray-600 transition transform border rounded-lg" placeholder="Description"></textarea>
                        </div>
                        {{-- Add sous point and upload image --}}
                        <div class="flex flex-col gap-2">
                            <label class="flex items-center justify-center px-4 py-1 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                                <span class="px-3 mt-2 text-base leading-normal">Parcourir une image</span>
                                <input type='file' class="hidden" wire:model="photo" />
                                <div x-show="isUploading" class="h-full">
                                    <progress max="100" x-bind:value="progress">
                                        <b x-text="progress"></b>%
                                    </progress>
                                </div>
                            </label>

                            <div class="flex flex-col gap-2 py-2">
                                <div class="flex flex-col p-2 bg-gray-200">
                                    <label for="sous" class="text-gray-500">Sous points</label>
                                    <div class="flex gap-1">
                                        <input type="text" class="flex-1 px-2" placeholder="Saisir le sous point et cliquer sur le bouton plus (+) pour ajouter" wire:model="new_sous">
                                        <button class="p-1 text-white bg-green-600" wire:click="add">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        {{-- Liste sous point --}}
                        <div class="grid grid-cols-2 gap-3">
                            @foreach ($sous as $s)
                                <div class="flex items-center justify-between text-white bg-green-600" >
                                    <b class="px-2 py-1 mr-2 bg-black">{{$loop->index + 1}}</b>
                                    <p class="flex-1">{{$s}}</p>
                                    <b class="px-2 py-1 bg-black cursor-pointer hover:bg-gray-500" wire:click="sup({{$loop->index}})">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </b>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="flex">
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-blue-900" @click="modal=true;save=true;update=false;del=false">Enregistrer</button>        
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-yellow-600" @click="modal=true;save=false;update=true;del=false;">Modifier</button>        
                        <button class="flex-1 px-3 py-2 text-lg font-bold text-white bg-red-900" @click="modal=true;save=false;update=false;del=true;">Supprimer</button>
                        <button class="flex-1 text-lg font-bold text-white bg-gray-500 -3" wire:click="resetFields" @click="descri='';lib='';id=0">Clear</button>        
                    </div>
                    
                </div> 
            </div>
            
            <div class="grid grid-cols-3 gap-2 divide-y-2">
                @if ($photo)
                <a class="flex flex-col justify-center p-2 text-center shadow" href="#">
                    <img src="{{ $photo->temporaryUrl() }}" alt="Pas d'image ici " srcset="" class="flex-1">                    
                    <h1 class="text-lg font-bold bg-red-400">Previsualiser l'image</h1>
                </a>
                @endif
                @foreach ($domaines as $ligne)
                    <div class="flex flex-col cursor-pointer" wire:click="charger({{$ligne}})">
                        @if (Storage::exists('public/domaine/'.$ligne->id.'.png'))    
                            <img src="{{asset('storage/domaine/'.$ligne->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="flex-1">
                        @endif
                        <button class="flex justify-between p-2 font-bold text-white transition duration-300 bg-blue-900 shadow cursor-pointer hover:bg-blue-800">
                            <h1><?php echo $ligne->lib; ?></h1>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$ligne->icon}}"></path></svg>
                        </button>
                        <div class="p-2 text-lg text-justify bg-gray-300">
                            <?php echo $ligne->descri; ?>
                            @if (is_array($ligne->sous))
                                @if (count($ligne->sous) > 0)
                                <b class="block py-2 border-b">Sous secteurs</b>
                                    @foreach ($ligne->sous as $ss)
                                        <div class="flex gap-2">
                                            <b>{{$loop->index + 1}}.</b>
                                            <p>{{$ss}}</p>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        </div>
                    </div>
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
    <div class="absolute top-0 left-0 w-full bg-black cacher" id="notif3">
        <div class="flex p-2 text-white bg-purple-600">
            <p class="flex-1">{{ session('message') }}</p>
            <button>X</button>
        </div>
    </div>
    {{-- @if (session()->has('message'))
    @endif --}}

    <script>
        var c = document.querySelector('#notif4');
        window.addEventListener('Updated', event => {
            c.style.transform = "scale(0.2)";
            setTimeout(() => {
                c.style.transform = "scale(0.6)";
                setTimeout(() => {
                    c.style.transform = "scale(1)";
                }, 100);
            }, 100);
            setTimeout(() => {
                c.style.transform = "scale(0)";
            }, 3000);
        });
            
    </script>
</div>