@extends('layouts.admin')

@section('content')


    <div  class="max-h-screen overflow-y-auto c-bg-customBackground">
        <div class="p-4  flex justify-between c-bg-customBackground items-center mt-10">
            <h2 class="text-lg font-bold c-text-blue">Crear Usuario</h2>
            <x-buttons.route class="mr-4" route="admin.user.index" content="Atras"></x-buttons.route>
        </div>
        <div class="container mx-2  px-4 py-3 mb-8 overflow-x-auto c-bg-gray rounded-lg shadow-md dark:bg-gray-800">
            <form  class="">
                <div class="md:flex md:items-center mb-4">
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="name" class="block c-text-blue font-bold mb-2">Nombre*:</label>
                        <input     type="text" id="" name="name" class="bg-gray-300  focus:outline-none  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">

                        <div class="h-4">
                            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="email" class="block c-text-blue font-bold mb-2">Email*:</label>
                        <input   type="email" id="" name="email" class="bg-gray-300 focus:outline-none  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">

                        <div class="h-4">
                            @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 ">
                        <label for="phone" class="block c-text-blue font-bold mb-2">Teléfono:</label>
                        <input   type="text" id="" name="phone" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">

                        <div class="h-4">
                            @error('phone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-4">

                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="document" class="block c-text-blue font-bold mb-2">Identificación:</label>
                        <input wire:model.lazy="document"  type="text" id="document" name="document" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">
                        <div class="h-4">
                            @error('document') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0">
                        <label for="countries" class="block c-text-blue font-bold mb-2">Rol*:</label>
                        <select wire:model.lazy="roleId" id="" name="roleId" class="mb-2 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Seleccionar rol</option>


                        </select>
                        <div class="h-4">
                            @error('roleId') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                        <div x-data="{ showpassword: true }" class="md:w-1/2 pr-0 md:pr-4 mb-4 md:mb-0 mt-5 ">
                            <label for="password" class="block c-text-blue font-bold mb-2">Contraseña*:</label>
                            <input wire:model.lazy="password" :type=" showpassword ? 'password' : 'text'" id="" name="password" class="focus:outline-none bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  mb-2">

                            <div class="mt-2">
                                <input type="checkbox" @click="showpassword = !showpassword" name="" id="">
                                <span class="text-gray-400 text-sm">Mostrr contraseña</span>
                            </div>
                            <div class="h-4">
                                @error('password') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>


                </div>
                <div  class="flex flex-col c-text-blue ">
                    <span>* Campo obligatorio.</span>
                    <span>El número de teléfono debe tener entre 7 y 10 dígitos.</span>
                    <span >La contraseña debe contener al menos 8 caracteres, una letra mayúscula, una letra minúscula y un número</span>
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


