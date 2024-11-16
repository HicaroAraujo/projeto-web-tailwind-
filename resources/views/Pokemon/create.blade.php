@extends('layouts.app')

@section( 'conteudo')
    <div class="border-4 border-blue-500  my-10 ml-40 bg-[url('https://th.bing.com/th/id/R.9bbc3ddbd97a54f0f2b1d0d242f4152d?rik=g6xuXFZ3XBZl%2fQ&riu=http%3a%2f%2fimages6.fanpop.com%2fimage%2fphotos%2f33900000%2fAll-the-Poke-mon-pokemon-33957610-2560-1600.jpg&ehk=uF4I%2b5pzbzhY%2bPn8F2cUhjdWqW4kvJQi9rhL30Xqm14%3d&risl=1&pid=ImgRaw&r=0')] bg-couver bg-center">
      <form class="max-w-sm mx-auto " action="{{ url('pokemon') }}" method="POST">
        @csrf
          <div class="mb-5">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-3xl"> Nome do pokemon</label>
            <input type="text" name="nome" placeholder="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
          </div>
          <div class="mb-5">
            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-3xl ">Tipo do pokemon</label>
            <input type="text" name="tipo" placeholder="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required/>
          </div>
          <div class="mb-5">
            <label for="pontos_de_poder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-3xl">Ponto de poder</label>
            <input type="number" name="pontos_de_poder" placeholder="pontos_de_poder"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
          </div>
          
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-8">create pokemon</button>
  '   </form>
    </div>
    


@endsection


