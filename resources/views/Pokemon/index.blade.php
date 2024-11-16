@extends('layouts.app')

@section('conteudo')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4">
    @foreach($pokemon as $cadaPokemon)
        <div class="bg-white shadow-lg rounded-lg p-5 border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $cadaPokemon->nome }}</h3>
            <p class="text-gray-700 dark:text-gray-400 mb-1"><strong>Tipo:</strong> {{ $cadaPokemon->tipo }}</p>
            <p class="text-gray-700 dark:text-gray-400 mb-4"><strong>Pontos de Poder:</strong> {{ $cadaPokemon->pontos_de_poder }}</p>
            
            <div class="flex justify-between items-center">
                <!-- Botão de Editar -->
                <a href="{{ url('pokemon/'.$cadaPokemon->id.'/edit') }}"
                   class="text-blue-600 bg-blue-100 hover:bg-blue-200 font-semibold py-1 px-3 rounded-lg text-sm dark:bg-blue-700 dark:hover:bg-blue-600 dark:text-white">
                    Editar
                </a>
                
                <!-- Formulário de Exclusão -->
                <form action="{{ url('pokemon/'.$cadaPokemon->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="text-red-600 bg-red-100 hover:bg-red-200 font-semibold py-1 px-3 rounded-lg text-sm dark:bg-red-700 dark:hover:bg-red-600 dark:text-white">
                        Deletar
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection

