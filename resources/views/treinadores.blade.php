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