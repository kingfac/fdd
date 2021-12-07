<div class="flex justify-center mt-12 {{-- border-t-8 border-green-600 --}} bg-gray-50 flex-col items-center">
    <div class="w-full py-4 text-white bg-green-600">
        <h1 class="w-full text-2xl font-bold text-center">A PROPOS DE NOUS</h1>
    </div>
    <div class="grid w-full grid-rows-1 gap-4 px-5 py-5 border-l border-r lg:py-20 lg:max-w-7xl">
        <div class="grid grid-cols-1 px-10 py-5 bg-white shadow-2xl lg:py-20 lg:grid-cols-2" {{-- style="background-image: url('{{asset('assets/accompagner-ministeres-developpement-rural-projet-cameroun.jpg')}}')" --}}>
            <div class="flex items-center justify-center">
                <div class="px-2 transform lg:px-5 lg:-rotate-12 bg-green-50 rounded-xl">
                    <div class="px-3 transform bg-green-100 rounded-xl lg:rotate-12">
                        <div class="px-2 transform bg-green-200 rounded-xl lg:rotate-12">
                            <div class="flex items-center justify-center px-2 transform bg-green-300 rounded-xl lg:rotate-12 lg:h-60 lg:w-60 lg:px-0">
                                <h1 class="w-full text-2xl text-center text-white transform lg:-rotate-45 rounded-xl">{{$nouss->titre}} ?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center py-5">
                <h1 class="text-2xl font-bold text-left">{{$nouss->sous}}</h1>
                <p class="py-5 text-justify">
                    {{$nouss->contenu}}
                </p>
                <div class="flex items-center justify-end py-5">
                    <a class="text-green-600 underline" href="#">
                        Autres...
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Contenu --}}
</div>