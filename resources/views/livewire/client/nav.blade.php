<div class="fixed top-0 w-full">
    <div class="flex py-3 lg:px-72 bg-gray-50">
        <div class="flex items-center justify-center">
            <div>
                <img src="{{asset('assets/logo/logo.jpeg')}}" alt="" class=" w-28">
            </div>
            <div class="flex flex-col items-start justify-center">
                <h2>Kongoterra</h2>
                <h3>Pour une santé saine et équilibrée</h3>
            </div>
        </div>
        <div class="flex items-center justify-end flex-1 gap-2">
            <a href="#" class="p-1 text-white bg-green-500">
                <svg class="w-8 h-8 p-1 border border-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            </a>
            <div class="flex gap-2" x-data="{s : false}">
                <input type="text" name="" id="" x-show="s">
                <button class="p-1 text-green-500 bg-white border border-green-500">
                    <svg class="w-8 h-8 p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>
        </div>
    </div>
    <nav class="bg-gray-900 lg:px-72" x-data="
        {
            open : false,
            nav : [true, false, false, false, false, false],
            navig(id){
                if(this.nav[id] != true){
                    this.nav[id] = true;
                }
            },
            about : false,
            parti : false
        }
    ">
        <div class="mx-auto">
            <div class="{{-- items-center justify-center --}} hidden lg:flex">
                <a href="/" @click="navig(0)" :class="{'text-green-400' : nav[0], 'text-white' : nav[0], 'text-gray-200' : !nav[0]}" class="h-full px-10 py-3 text-lg transition duration-300 hover:text-gray-400">Accueil</a>
                <a href="/#domaines" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Secteurs d'activité</a>
                <a href="/#services" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos services</a>
                <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @mouseover="about=true" class="flex items-center justify-center gap-3 px-6 text-gray-200">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    <div class="absolute flex flex-col p-1 px-6 bg-gray-100" x-show="about" @mouseover.away="about=false">
                        @foreach ($nouss as $ns)
                        <a href="{{route('about', ['el'=> $ns->id])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                        @endforeach
                        
                        <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Rappors</a>
                    </div>
                </div>
                {{-- <div class="h-full py-3 text-lg text-gray-200 transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @mouseover="parti=true" class="flex items-center justify-center gap-3 px-6">Participer / Soutenir <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    <div class="absolute flex flex-col p-1 px-6 bg-gray-100" x-show="parti" @mouseover.away="parti=false">
                        <a href="{{route('part', ['el'=>'0'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">Participer</a>
                        <a href="{{route('part', ['el'=>'1'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Faire un don</a>
                    </div>
                </div> --}}
                <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Partenaires</a>
                <div class="flex items-center justify-end flex-1 gap-5 text-red-600">
                    <a href="#partenaires" class="h-full py-3 text-lg text-green-500 transition duration-300 hover:text-gray-400">Inscription</a>
                    <a href="#partenaires" class="h-full py-3 text-lg text-green-500 transition duration-300 hover:text-gray-400">Connexion</a>
                </div>
            </div>
            <div class="flex items-center justify-between px-2 py-2 lg:hidden">
                <p class="font-bold text-green-600">FDD/ASBL</p>
                <a href="#" class="h-full px-3 py-1 text-lg text-gray-200 transition duration-300 border hover:text-gray-400" @click="open=!open">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </a>
            </div>
            <div class="z-0 flex flex-col lg:hidden" x-show="open" x-transition.500ms>
                <a href="/" class="h-full px-10 py-3 text-lg text-white transition duration-300 bg-green-600 hover:text-gray-200 hover:bg-gray-100">Accueil</a>
                <a href="#services" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Nos services</a>
                <a href="/#domaines" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Domaines</a>
                <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @click="about=true" class="flex gap-3 px-6">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    <div class="flex flex-col p-1 px-6 bg-gray-100" x-show="about" @click.away="about=false">
                        @foreach ($nouss as $ns)
                        <a href="{{route('about', ['el'=> $ns->id])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                        @endforeach
                        
                        <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Rappors</a>
                    </div>
                </div>
                <div class="h-full py-3 text-lg text-gray-200 transition duration-300 cursor-pointer hover:text-gray-400">
                    <p @click="parti=!parti" class="flex gap-3 px-6">Participer / Soutenir <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                    
                    <div class="flex flex-col p-1 px-6 bg-gray-100 border-t border-b" x-show="parti" @click.away="parti=false">
                        <a href="{{route('part', ['el'=>'0'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 border-b hover:text-gray-400">Participer</a>
                        <a href="{{route('part', ['el'=>'1'])}}" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Faire un don</a>
                    </div>
                </div>
                <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-200 transition duration-300 hover:text-gray-400">Partenaires</a>
            </div>
        </div>
    </nav>
</div>
