<div class="grid w-full grid-cols-1 lg:py-10 md:grid-cols-2">
    <div class="flex items-center justify-center px-10 md:hidden sm:px-44">
        <img src="{{asset('assets/header/3918950.jpg')}}" alt="" srcset="" class="">
    </div>
    <div class="flex flex-col justify-center py-5 text-center md:px-5 lg:text-left lg:py-0">
        <h1 class="text-2xl font-bold text-gray-400">CONTACTEZ - NOUS</h1>                    
        <p class="py-3">
            Pour faire partir de notre association, nous vous prions de nous contacter à travers les éléments ci-après :
        </p>
        <div class="flex flex-col gap-3 py-10">
            @foreach ($contacts as $ct)
            <a href="{{($ct->type == 'null' ? '' : $ct->type.':'.$ct->lib)}}" class="flex items-center justify-between gap-5 border-b border-green-600 shadow-lg">
                <div class="p-3 text-white bg-green-600 border">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$ct->icon}}"></path></svg>
                </div>
                <p class="px-2 lg:px-10">{{$ct->lib}}</p>
            </a>
            @endforeach
                                
        </div>
    </div>
    <div class="justify-center hidden px-24 border-l md:flex">
        <img src="{{asset('assets/header/3918950.jpg')}}" alt="" srcset="">
    </div>
</div>