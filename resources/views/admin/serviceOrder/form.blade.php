@extends('layouts.admin')

@section('content')


    <div  class="max-h-screen overflow-y-auto c-bg-customBackground">
        <div class="p-4  flex justify-between c-bg-customBackground items-center mt-10">
            <h2 class="text-lg font-bold c-text-blue">Crear Orde de Servicio</h2>
            <x-buttons.route class="mr-4" route="admin.service-order.index" content="Atras"></x-buttons.route>
        </div>
        <div class=" mx-2  px-4 py-3 mb-8 overflow-x-auto c-bg-gray rounded-lg shadow-md dark:bg-gray-800">
            <form  class="">

                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Horas*:</label>
                        <input     type="number" id="" name="name" class="bg-gray-300  focus:outline-none  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">

                        <div class="h-4">
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="countries" class="block c-text-blue font-bold mb-2">Cliente*:</label>
                        <select wire:model.lazy="roleId" id="" name="roleId" class="mb-2 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Seleccionar rol</option>
                        </select>
                        <div class="h-4">
                            @error('roleId') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                </div>

                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-full">
                        <label for="name" class="block c-text-blue font-bold mb-2">Descripción*:</label>
                        <textarea
                            id="general_observation" name="observations" cols="" rows="12" class="resize-none mt-4 focus:outline-none
                    bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg
                    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                     mb-2"></textarea>
                    </div>

                </div>


                <div  class="flex flex-col c-text-blue ">
                    <span>* Campo obligatorio.</span>

                </div>
                <div class="md:flex md:items-center mb-4">

                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0 mt-6">
                        <x-buttons.save content="Guardar"></x-buttons.save>
                    </div>
                </div>

            </form>

        </div>


    </div>




@endsection


