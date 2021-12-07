<div class="flex flex-col items-center bg-gray-200 lg:pt-5" id="footer">
    <div class="grid w-full grid-cols-1 gap-10 p-5 lg:grid-cols-3 xl:max-w-7xl xl:p-0">
        <div class="flex flex-col text-center md:text-left">
            <h1 class="w-full py-5 text-gray-400 lg:py-10">CONTACTEZ-<b>NOUS</b></h1>
            <div class="text-justify ">
                <p>{{$infos[0]->titre}} :</p>
                <p>{{$infos[0]->descri}}</p>
            </div>
            <div class="flex flex-col text-center md:text-left">
                <h1 class="w-full py-10 text-gray-400 ">SUIVEZ-<b>NOUS</b></h1>
                <div class="flex flex-col gap-5">
                    @foreach ($reseaux as $rx)
                    <a href="{{$rx->lien}}" class="flex items-center">
                        <svg class="w-10 h-10 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="{{$rx->icon}}"/></svg>
                        <p class="px-5">{{$rx->lib}}</p>
                    </a>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <div class="flex flex-col text-center lg:col-span-2 md:text-left">
            <h1 class="w-full py-10 text-gray-400 ">FDD <b>Leadership</b></h1>
            <div class="flex flex-col items-center justify-center lg:flex-row">
                <div class="">
                    <div class="">
                        @if (Storage::exists('public/profil/ceo.png'))    
                        <img src="{{asset('storage/profil/ceo.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full px-2 shadow-2xl lg:h-32">
                        @endif
                    </div>
                </div>
                <div class="flex-1 pl-2">
                    <p class="text-justify ">
                        <b>{{$infos[1]->titre}} :</b>
                        {{$infos[1]->descri}}
                    </p>
                </div>
            </div>
            <div class="flex flex-col text-center md:text-left">
                <h1 class="w-full pt-10 text-gray-400 "><?php echo $infos[2]->titre ?></b></h1>
                <div class="flex items-center justify-center">
                    <div class="flex-1">
                        <p class="text-justify ">{{$infos[2]->descri}}</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="flex items-center justify-center w-full py-1 mt-5 text-center text-white bg-green-600">
        <p class="px-2">
            Copyright ©  2021 FDD-ASBL.Tous droits réservés.
        </p>
        <p class="px-2 border-l">by FAC#Glodi Nsuadi</p>
    </div>
</div>
