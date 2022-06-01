<div class="flex justify-center mt-12 {{-- border-t-8 border-green-600 --}} bg-gray-50 flex-col items-center">
    <div class="w-full py-4 text-white bg-green-600">
        <h1 class="w-full text-2xl font-bold text-center">RAPPORTS D'ACTIVITES</h1>
    </div>
    <div class="grid w-full grid-cols-2 gap-4 px-5 py-5 border-l border-r lg:py-20 lg:max-w-7xl">
    @foreach ($rapports as $raps)
        <div class="flex border">
            <div>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div class="flex flex-col">
                <div class="flex justify-between">
                    <b class="px-2">Titre</b>
                    <p class="px-2 text-lg font-bold text-white bg-green-600">Bon de je ne sais quoi</p>
                </div>
                <hr>
                <b class="px-2 py-2">Description</b>
                <p class="px-2 pb-3 text-justify">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor inventore quibusdam optio, ut exercitationem rerum. Voluptatibus culpa exercitationem veritatis impedit sunt labore eaque dolor magnam animi corrupti. Deleniti, qui praesentium!
                </p>
                <div class="flex justify-end px-2 pb-3">
                    <a href="#" class="text-green-600">Telecharger</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{-- Contenu --}}
</div>