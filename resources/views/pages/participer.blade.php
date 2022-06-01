@extends('app')

@section('client')
<div class="flex flex-col">
    <div class="flex flex-col items-center justify-center w-full px-5 img-cover h-96" style="background-image: url('{{asset('assets/header/29572433908_f3b04df191_b.jpg')}}');">
        @if ($el == 0)
        <h1 class="font-bold text-white md:text-3xl">FAIRE PARTIR DE FDD</h1>
        @else
        <h1 class="font-bold text-white md:text-3xl">FAIRE UN DON A FDD</h1>    
        @endif
        <hr>
    </div>
    <div class="flex items-center justify-center flex-1 w-full px-5 py-5 sm:px-10 lg:px-0">
        <div class="w-full bg-white border lg:max-w-7xl -mt-36 lg:mt-0">
            @if ($el == 0)
            <livewire:client.participer />
            @else
            <livewire:client.don />
            @endif
        </div>
    </div>
</div>
@endsection