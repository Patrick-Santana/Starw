<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ add_modal: false }">
    
        <div class="max-w-7xl mx-auto grid grid-cols sm:px-6 lg:px-8">
            <h1 class="block text-center text-xl py-3">Treinadores</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            <div>
                <div>
                        @include('treinadores')
                </div>
            </div>
                    


            </div >
                <div>
                    <h1 class="block text-center text-xl py-3">Pokemons</h1>
                    @include('pokemons')
            </div>
        </div>
</x-app-layout>
