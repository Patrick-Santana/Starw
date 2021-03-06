<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                
    <div class="p-6 bg-white border-b border-gray-200">
        <div class ="p-3 m-0.5 border rounded-lg bg-purple-100 hover:bg-purple-300 cursor-pointer" 
        @click="add_modal = true">
        Adicionar
        </div>
        @foreach($user->treinadors as $treinador)
            <div class= "p-1 bg-white border-b border-gray-200">
                 {{ $treinador->nome }} Sou Treinador pokemon, sou do {{ $treinador->ginasio}}, 
                 sou da liga {{ $treinador->liga}}
                 
            </div>
        @endforeach
    </div>

</div>
        <div class="fixed z-10 inset-0 overflow-y-auto" x-show="add_modal" >
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <h1> Adicionar Treinador</h1>
            <form action=" {{ route('add-treinador') }}"  method="POST">
                @csrf
                <!-- Nome -->
                <div>
                    <x-label for="nome" :value="__('Nome')" />

                    <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
                </div>

                <!-- Ginasio -->
                <div>
                    <x-label for="ginasio" :value="__('Ginasio')" />

                    <x-input id="ginasio" class="block mt-1 w-full" type="text" name="ginasio" :value="old('ginasio')" required autofocus />
                </div>

                <!-- liga -->
                    <div>
                        <x-label for="liga" :value="__('Liga')" />

                        <x-input id="liga" class="block mt-1 w-full" type="text" name="liga" :value="old('liga')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <a class="underline text-sm text-red-600 hover:text-red-600" @click="add_modal = false">
                            {{ __('Cancelar') }}
                        </a>
                        <x-button class="ml-4">
                            {{ __('Adicionar') }}
                        </x-button>
                    </div>
            </form>
        </div>
 
</div>
</div>
</div>