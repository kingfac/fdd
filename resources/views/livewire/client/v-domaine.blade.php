<div class="flex flex-col items-center py-5" id="services">
    <h1 class="w-full py-2 text-center text-green-600 md:py-10 lg:text-2xl xl:max-w-7xl lg:text-left">A PROPOS DES <b>DOMAINES</b></h1>
    <div class="grid w-full grid-cols-1 gap-4 px-5 py-10 lg:grid-cols-3 xl:max-w-7xl md:grid-cols-2 lg:px-0">
        @foreach ($domaines as $dom)    
        <div class="p-2 shadow-lg">
            <h1 class="py-2"><b>Wash kjfj</b></h1>
            <hr>
            <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ex adipisci, reprehenderit quos dignissimos culpa esse modi cum </p>
            <p class="font-bold text-right text-green-400">
                <a href="#">Voir plus...</a>
            </p>
        </div>
        @endforeach
    </div>
</div>
