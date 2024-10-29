@extends('layouts.admin')

@section('content')


    <section>
        <div class="max-h-screen overflow-y-auto">
            <div class="bg-gray-100 rounded-md p-4 flex justify-between items-center mt-10">
                <div class="mb-4 md:mb-0">
                    <h2 class="ml-4 text-lg font-bold c-text-blue ">Mensajes</h2>
                    <h2 class="ml-4 text-lg font-bold c-text-blue ">Cliente: Daniela Osorio</h2>
                </div>
                <x-buttons.route class="mr-4" route="admin.client.index" content="Atras"></x-buttons.route>
            </div>
        </div>


        <div class="mx-2  px-4 py-3 mb-8 overflow-x-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div>
                <!-- 1 -->
                <table class="w-full relative" >
                    <thead class="border-b border-neutral-200 dark:border-neutral-700">
                    <tr class="group">
                        <th class="px-2 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Fecha
                        </th>
                        <th class="px-2 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Servicio
                        </th>
                        <th class="px-2 text-left  text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Respondió
                        </th>
                        <th class="px-2 text-left  text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Mensaje
                        </th>
                        <th class="px-2 text-left  text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Accines
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="group"  >
                        <x-table.row> 29/10/2024</x-table.row>
                        <x-table.row> Asesría contable </x-table.row>
                        <x-table.row> No </x-table.row>
                        <x-table.row> <div> Un mensaje... </div> </x-table.row>
                        <x-table.row>
                            <div class="flex ">
                                <a   title="editar" class="cursor-pointer  p-1 text-blue-600 rounded hover:bg-blue-600 hover:text-white">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                </a>
                            </div>
                        </x-table.row>

                    </tr>
                    </tbody>
                    <tfoot class="border-t border-neutral-200 dark:border-neutral-700">

                    </tfoot>
                </table>

                <script>

                </script>


            </div>
        </div>

    </section>


@endsection


