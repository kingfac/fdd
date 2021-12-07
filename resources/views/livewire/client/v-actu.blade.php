<div class="w-full" style="background-image: url('{{asset('assets/accompagner-ministeres-developpement-rural-projet-cameroun.jpg')}}')">
    {{-- Stop trying to control. --}}
    <div class="flex flex-col items-center justify-center gap-10 py-10 white-transparent2">
        <h1 class="py-5 text-center lg:text-2xl">ACTUALITES DU <b>MOMENT</b></h1>
        <div class="flex items-center justify-center w-full px-10 lg:gap-10 xl:max-w-7xl lg:flex-row xl:px-0">
            @foreach ($actus as $actu)    
            <div class="cursor-pointer">
                @if (Storage::exists('public/actu/'.$actu->id.'.png'))    
                    <img src="{{asset('storage/actu/'.$actu->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="object-cover transition duration-200 transform hover:scale-125">
                @endif
                <h1 class="relative py-2 text-center text-white green-transparent -top-10">{{$actu->titre}}</h1>
            </div>
            @endforeach
        </div>
    </div>
</div>
