@extends('layouts.web_site')

@section('content')
    <section class="mb-10">
        <div class="c-bg-blue text-white py-2 font-semibold text-center">  <h1>CONTACTO </h1> </div>
        <article class="p-8  ">
            <form action="" class="p-4 pb-12 rounded-2xl bg-white">
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Nombre*:</label>
                        <input type="text" id="name" name="name" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                        <div class="h-4"></div>
                    </div>


                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Empresa*:</label>
                        <input type="text" id="name" name="name" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                        <div class="h-4"></div>
                    </div>

                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <div>
                            <label for="name" class=" c-text-blue font-bold mb-2">Identificación*:</label> <span class="pl-4 text-green-500">Solo números</span>
                        </div>
                        <input type="number" id="name" name="name" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                        <div class="h-4"></div>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Email*:</label>
                        <input type="email" id="name" name="name" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2">
                        <div class="h-4"></div>
                    </div>


                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Servicios*:</label>
                        <select id="nomenclature_main"  wire:model.lazy="nomenclature_main" name="nomenclature_main" class="mb-2 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Seleccionar</option>
                            <option value="">Servicio 1</option>
                            <option value="">Servicio 2</option>
                            <option value="">Servicio 3</option>


                        </select>
                        <div class="h-4"></div>
                    </div>

                </div>

                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-full pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Mensaje*:</label>
                        <textarea type="text" id="name" name="name" rows="4" class="resize-none focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2"></textarea>
                        <div class="h-4"></div>
                    </div>

                </div>

                <div class="mb-2">
                    <p class="c-text-blue font-bold">Campos Obligatorios *</p>
                </div>

                <x-buttons.save content="Enviar"></x-buttons.save>
            </form>


        </article>
    </section>
@endsection


