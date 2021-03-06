<nav class="fixed top-0 w-full bg-gray-100 lg:px-10" x-data="
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
    <div class="mx-auto lg:px-4">
        <div class="items-center justify-center hidden lg:flex">
            <a href="/" @click="navig(0)" :class="{'bg-green-600' : nav[0], 'text-white' : nav[0], 'text-gray-600' : !nav[0]}" class="h-full px-10 py-3 text-lg transition duration-300 hover:text-gray-600 hover:bg-gray-100">Accueil</a>
            <a href="/#domaines" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Secteurs d'activité</a>
            <a href="/#services" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Nos services</a>
            <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                <p @mouseover="about=true" class="flex items-center justify-center gap-3 px-6">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                <div class="absolute flex flex-col p-1 px-6 bg-gray-100" x-show="about" @mouseover.away="about=false">
                    @foreach ($nouss as $ns)
                    <a href="{{route('about', ['el'=> $ns->id])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                    @endforeach
                    
                    <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Rappors</a>
                </div>
            </div>
            <div class="h-full py-3 text-lg text-gray-600 transition duration-300 cursor-pointer hover:text-gray-400">
                <p @mouseover="parti=true" class="flex items-center justify-center gap-3 px-6">Participer / Soutenir <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                <div class="absolute flex flex-col p-1 px-6 bg-gray-100" x-show="parti" @mouseover.away="parti=false">
                    <a href="{{route('part', ['el'=>'0'])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 border-b hover:text-gray-400">Participer</a>
                    <a href="{{route('part', ['el'=>'1'])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Faire un don</a>
                </div>
            </div>
            <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Partenaires</a>
        </div>
        <div class="flex items-center justify-between px-2 py-2 lg:hidden">
            <p class="font-bold text-green-600">FDD/ASBL</p>
            <a href="#" class="h-full px-3 py-1 text-lg text-gray-600 transition duration-300 border hover:text-gray-400" @click="open=!open">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </a>
        </div>
        <div class="z-0 flex flex-col lg:hidden" x-show="open" x-transition.500ms>
            <a href="/" class="h-full px-10 py-3 text-lg text-white transition duration-300 bg-green-600 hover:text-gray-600 hover:bg-gray-100">Accueil</a>
            <a href="#services" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Nos services</a>
            <a href="/#domaines" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Domaines</a>
            <div class="h-full py-3 text-lg transition duration-300 cursor-pointer hover:text-gray-400">
                <p @click="about=true" class="flex gap-3 px-6">A propos de nous <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                <div class="flex flex-col p-1 px-6 bg-gray-100" x-show="about" @click.away="about=false">
                    @foreach ($nouss as $ns)
                    <a href="{{route('about', ['el'=> $ns->id])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 border-b hover:text-gray-400">{{$ns->titre}}</a>
                    @endforeach
                    
                    <a href="{{route('rapport')}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Rappors</a>
                </div>
            </div>
            <div class="h-full py-3 text-lg text-gray-600 transition duration-300 cursor-pointer hover:text-gray-400">
                <p @click="parti=!parti" class="flex gap-3 px-6">Participer / Soutenir <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></p>
                
                <div class="flex flex-col p-1 px-6 bg-gray-100 border-t border-b" x-show="parti" @click.away="parti=false">
                    <a href="{{route('part', ['el'=>'0'])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 border-b hover:text-gray-400">Participer</a>
                    <a href="{{route('part', ['el'=>'1'])}}" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Faire un don</a>
                </div>
            </div>
            <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Partenaires</a>
        </div>
    </div>
</nav>
