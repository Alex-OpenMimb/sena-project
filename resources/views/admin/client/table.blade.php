@extends('layouts.admin')

@section('content')
    <section>
        <div class="max-h-screen overflow-y-auto">
            <div class="bg-gray-100 rounded-md p-4 flex justify-between items-center mt-10">
                <div class="mb-4 md:mb-0">
                    <h2 class="ml-4 text-lg font-bold c-text-blue ">Clientes</h2>
                </div>
            </div>
        </div>


        <div class="mx-2  px-4 py-3 mb-8 overflow-x-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div>
                <!-- 1 -->
                <table class="w-full relative" >
                    <thead class="border-b border-neutral-200 dark:border-neutral-700">
                    <tr class="group">
                        <th class="px-2 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Nombre
                        </th>
                        <th class="px-2 text-left text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Email
                        </th>
                        <th class="px-2 text-left  text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Empresa
                        </th>
                        <th class="px-2 text-left  text-black bg-neutral-50 dark:text-white dark:bg-neutral-800">
                            Mensajes
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr class="group"  >
                        <x-table.row> Daniela Osorio</x-table.row>
                        <x-table.row> contabilidad@bimbo.com </x-table.row>
                        <x-table.row> Bimbo </x-table.row>
                        <x-table.row>
                            <div class="flex ">
                                <a href="{{route('admin.client.message')}}"  title="editar" class="cursor-pointer  p-1 text-blue-600 rounded hover:bg-blue-600 hover:text-white">
                                   Mensaje
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


