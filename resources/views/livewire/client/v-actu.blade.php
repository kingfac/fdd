<div class="w-full" style="background-image: url('{{asset('assets/accompagner-ministeres-developpement-rural-projet-cameroun.jpg')}}')">
    {{-- Stop trying to control. --}}
    <div class="flex flex-col items-center justify-center gap-10 py-10 white-transparent2">
        <h1 class="py-5 text-center lg:text-2xl">ACTUALITES DU <b>MOMENT</b></h1>
        <div class="lg:{{(count($actus) > 1) ? 'grid-cols-2' : 'grid-cols-1'}} px-10 lg:gap-10 xl:max-w-7xl xl:px-0 grid-cols-1 gap-2 {{(count($actus) > 1) ? 'grid' : ''}}">
            @foreach ($actus as $actu)    
            <div class="flex flex-col flex-1 h-full cursor-pointer">
                
                @if (strpos($actu->lien, "v=") !== false)
                    <iframe {{-- width="560" height="315" --}} class="transition duration-200 transform hover:scale-125 h-72 sm:h-96" src="https://www.youtube.com/embed/{{explode('v=', $actu->lien)[1]}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    @if (Storage::exists('public/actu/'.$actu->id.'.png'))    
                        <img src="{{asset('storage/actu/'.$actu->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="transition duration-200 transform hover:scale-125">
                    @endif
                @endif
                <div class="relative p-2 bg-white" x-data="{descri:false}" :class="{'-top-96' : descri}">
                    <h2 class="font-bold" >{{$actu->titre}}</h2>
                    <p class="text-justify">
                        {{substr($actu->descri, 0, 256)}} 
                        @if (strlen($actu->descri) > 256)
                            <b class="text-lg font-bold text-gray-300 underline cursor-pointer" @click="descri=!descri" x-show="!descri">Lire la suite ...</b>
                        @endif
                        <span class="text-justify" x-show="descri" x-transition.500ms>
                            {{substr($actu->descri, 256, strlen($actu->descri))}} 
                            <b class="text-lg font-bold text-gray-300 underline cursor-pointer" @click="descri=!descri">Quitter description</b>
                        </span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>