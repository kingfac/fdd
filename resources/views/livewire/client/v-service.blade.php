<div class="flex flex-col items-center py-5" id="services">
    <div class="grid w-full grid-cols-1 gap-4 px-5 py-5 xl:grid-cols-3 xl:px-48 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
            <h1 class="py-2 text-left lg:text-2xl">NOS <b>SERVICES</b></h1>
            <div class="py-2 mb-5">
                <p class="py-2">
                    FDD ASBL organise les services suivants :
                </p>

                <div class="flex flex-col gap-3">

                    @foreach ($services as $serv)    
                    <p class="px-1 py-2 pl-5 text-justify border-r-8 border-green-600 shadow-lg bg-gray-50">
                        <b>{{$serv->lib}} : </b>
                        {{$serv->descri}}
                    </p>
                    @endforeach
                    
                </div>
            </div>
            <button class="px-5 py-2 text-white transform bg-green-600 lg:w-1/3">En savoir plus</button>
        </div>
        <div class="hidden bg-gray-100 xl:col-span-2 lg:flex">
            <img src="{{asset('assets/vecteurs/5291.jpg')}}" alt="" srcset="" class="w-full">
        </div>
    </div>
</div>
