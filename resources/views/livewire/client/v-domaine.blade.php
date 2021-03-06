<div class="flex flex-col items-center py-5" id="domaines">
    <h1 class="w-full py-2 text-center text-green-600 md:py-10 lg:text-2xl xl:max-w-7xl lg:text-left xl:px-0 lg:px-5">SECTEURS <b>D'ACTIVITE</b></h1>
    <div class="grid w-full grid-cols-1 gap-4 px-5 py-10 lg:grid-cols-3 xl:max-w-7xl md:grid-cols-2 xl:px-0">
        @foreach ($domaines as $dom)    
        <div class="p-2 shadow-lg">
            <h1 class="py-2"><b>{{$dom->lib}}</b></h1>
            <hr>
            <p class="py-2">{{$dom->descri}}</p>
            <p class="font-bold text-right text-green-400">
                <a href="#">Voir plus...</a>
            </p>
        </div>
        @endforeach
    </div>
</div>
