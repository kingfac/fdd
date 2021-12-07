<div class="py-5" x-data="{parti:false}">
    <h1 class="py-10 text-center">FAITES NOUS UN DON EN ESPECE PAR LES COMPTES CI-APRES</h1>
    <hr>
    <div class="grid grid-cols-1 gap-6 py-5 lg:grid-cols-2">
        {{-- If your happiness depends on money, you will never be happy with yourself. --}}
        @foreach ($comptes as $cpt)
        <div class="flex items-center justify-center gap-4 px-2 pb-4 border-b lg:border-b-0 lg:pb-0">            
            @if (Storage::exists('public/compte/'.$cpt->id.'.png'))    
            <img src="{{asset('storage/compte/'.$cpt->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-20 p-2 shadow-lg sm:w-28">
            @endif
            <div class="flex-1 md:flex-auto">
                <h1 class="text-xl font-bold">{{$cpt->nom}}</h1>
                <p><b>Nom du compte : </b> {{$cpt->nom}}</p>
                <p><b>Numero de compte : </b> <span class="">{{$cpt->numero}}</span></p>
            </div>
        </div>
        @endforeach
    </div>
    <hr>
    <div class="flex items-center justify-center px-5 py-5">
        <button class="px-10 py-2 text-white bg-green-600" @click="parti=!parti">
            POUR UN DON PLUS PARTICULIER, VEILLEZ NOUS CONTACTER ICI 
        </button>
        <div class="fixed flex flex-col p-1 bg-white border shadow-lg top-20" x-show="parti" x-transition>
            <div class="flex items-center justify-end">
                <button class="px-4 py-1 text-white bg-gray-500" @click="parti=false">X</button>
            </div>
            <div class="px-10">
                <livewire:client.participer />
            </div>
        </div>
    </div>
</div>
