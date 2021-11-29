<nav class="fixed top-0 w-full bg-gray-100 lg:px-10" x-data="
    {open : false}
">
    <div class="mx-auto lg:px-4 lg:max-w-6xl">
        <div class="hidden lg:flex">
            <a href="#" class="h-full px-10 py-3 text-lg text-white transition duration-300 bg-green-600 hover:text-gray-600 hover:bg-gray-100">Accueil</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">A propos de nous</a>
            <a href="#services" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Nos services</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Domaines</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Participer / Soutenir</a>
            <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Partenaires</a>
        </div>
        <div class="flex items-center justify-end px-2 py-2 lg:hidden">
            <a href="#" class="h-full px-3 py-1 text-lg text-gray-600 transition duration-300 border hover:text-gray-400" @click="open=!open">@</a>
        </div>
        <div class="flex flex-col lg:hidden" x-show="open" x-transition.500ms>
            <a href="#" class="h-full px-10 py-3 text-lg text-white transition duration-300 bg-green-400 hover:text-gray-600 hover:bg-gray-100">Accueil</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">A propos de nous</a>
            <a href="#services" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Nos services</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Domaines</a>
            <a href="#" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Participer / Soutenir</a>
            <a href="#partenaires" class="h-full px-6 py-3 text-lg text-gray-600 transition duration-300 hover:text-gray-400">Partenaires</a>
        </div>
    </div>
</nav>
