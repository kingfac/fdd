<div class="flex flex-col items-center py-5 bg-gray-200" id="partenaires">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1 class="py-10 text-center lg:text-2xl">NOS <b>PARTENAIRES</b></h1>
    <div class="grid w-full grid-cols-2 py-10 xl:grid-cols-4 xl:max-w-7xl md:grid-cols-3">
        @foreach ($parts as $part)
        <a class="flex flex-col items-center justify-center gap-4 mb-10 text-center transition duration-200 transform hover:scale-110" href="#">
            <img src="{{asset('assets/logo/fdd.png')}}" alt="" srcset="" class="h-16 ">
            <h1 class="font-bold ">Oil France</h1>
        </a>
        @endforeach
    </div>
</div>
