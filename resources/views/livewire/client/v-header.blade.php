<div class="mt-12">
    <div class="w-full h-full splide">
         <div class="splide__arrows">
            <button class="text-3xl text-green-500 splide__arrow splide__arrow--prev">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
            <button class="text-3xl text-green-500 splide__arrow splide__arrow--next ">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            </button>
         </div>
         <div class="splide__track">
               <ul class="splide__list">  
                   @foreach ($headers as $hd)
                   <li class="splide__slide" style="height: 50vh;">
                    @if (Storage::exists('public/header/'.$hd->id.'.png'))    
                        <img src="{{asset('storage/header/'.$hd->id.'.png')}}?{{ rand() }}" alt="Pas d'image pour cette info" srcset="" class="w-full h-full">
                    @endif
                        <div class="absolute flex flex-col items-center w-full px-5 xl:px-28 lg:px-10 lg:items-start lg:justify-end" {{-- style="height: 50vh;" --}} style="top:26.5vh; height:24.5vh;">
                            <h1 class="px-10 py-2 font-bold text-justify text-white lg:text-4xl __animate __animate_bounce header-title">
                                <?php echo $hd['lib'] ?>
                            </h1>
                        </div>
                   </li>
                   @endforeach
               </ul>
         </div>
    </div>
    <div class="absolute flex flex-col w-full top-12" style="height: 50vh;">
        <div class="flex-1 pt-5 pl-5">
            <img src="{{asset('assets/logo/logo fdd white.png')}}" alt="" srcset="" class="h-24 ">
        </div>
        <div class="flex items-end justify-end flex-1 w-full">
            <p class="px-10 py-2 font-bold text-white bg-green-600">Formateurs pour un Développement Durable</p>
        </div>
    </div>
</div>
