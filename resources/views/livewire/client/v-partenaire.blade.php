<div class="flex flex-col items-center py-5 bg-gray-200" id="partenaires">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1 class="py-10 text-center lg:text-2xl">NOS <b>PARTENAIRES</b></h1>
    <div class="{{count($parts) > 3 ? 'grid' : 'flex gap-20'}} content-center w-full grid-cols-2 py-10 align-middle xl:grid-cols-4 xl:max-w-7xl md:grid-cols-3 justify-center items-center">
        @foreach ($parts as $part)
        <a class="flex flex-col items-center justify-center gap-4 mb-10 text-center transition duration-200 transform hover:scale-110" href="{{$part->lien}}">
            @if (Storage::exists('public/partenaire/'.$part->id.'.png'))    
            <img src="{{asset('storage/partenaire/'.$part->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="h-16">
            @endif
            <h1 class="font- ">{{$part->lib}}</h1>
        </a>
        @endforeach
        
    </div>
</div>
