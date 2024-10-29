<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <link rel="icon" href="{{asset('storage/image/logo/logo.jpeg')}}" type="image/x-icon">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Panel</title>
    @vite(['resources/css/style.css', 'resources/css/app.css','resources/css/admin.css', 'resources/js/app.js','resources/js/admin.js'])

</head>
<body class="text-gray-800 font-inter " >
<!--sidenav -->
<div class="container-admin fixed left-0 top-0 w-64 h-full bg-[#ffffff] p-4 z-50 sidebar-menu transition-transform border-r border-gray-300 overflow-y-auto no-scrollbar">
    <div class="flex">
        <img class="w-23 h-12 " src="{{asset('image/logo.png')}}" alt="Logo Technic Service"/>
    </div>

    <ul class="mt-4">
        <!-- Submenu Users-->

        <li class="mb-1 group ">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-500 hover:bg-blue-200 hover:text-blue-800 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-blue-200 group-[.selected]:text-blue-800 sidebar-dropdown-toggle">
                <span class="text-xl c-text-blue">Usuarios</span>
            </a>
        </li>


        <li class="mb-1 group ">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-500 hover:bg-blue-200 hover:text-blue-800 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-blue-200 group-[.selected]:text-blue-800 sidebar-dropdown-toggle">
                <span class="text-xl c-text-blue">Clientes</span>
            </a>
            <ul class="pl-7 mt-2 ">
                <li class="mb-4">
                    <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-600 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Listar clientes</a>
                </li>
            </ul>
        </li>

        <li class="mb-1 group ">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-500 hover:bg-blue-200 hover:text-blue-800 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-blue-200 group-[.selected]:text-blue-800 sidebar-dropdown-toggle">
                <span class="text-xl c-text-blue">Servicios</span>
            </a>
        </li>

        <li class="mb-1 group ">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-500 hover:bg-blue-200 hover:text-blue-800 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-blue-200 group-[.selected]:text-blue-800 sidebar-dropdown-toggle">
                <span class="text-xl c-text-blue">Orden de Servicios</span>
            </a>
        </li>

        <li class="mb-1 group ">
            <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-500 hover:bg-blue-200 hover:text-blue-800 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-blue-200 group-[.selected]:text-blue-800 sidebar-dropdown-toggle">
                <span class="text-xl c-text-blue">Facturación</span>
            </a>
        </li>

    </ul>
</div>
<div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
<!-- end sidenav -->

<main class="w-full md:w-3/4 md:ml-64 bg-gray-100 min-h-screen transition-all main">
    <!-- navbar -->
    <div class=" px-6 bg-[#ffffff] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle md:hidden">
            <i class="ri-menu-line"></i>
        </button>

        <ul class="ml-auto flex items-center ">
            <li class="dropdown ml-3">
                <button type="button" class="dropdown-toggle flex items-center">
                    <div class="flex-shrink-0 w-10 h-10 relative">
                        <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                            <img class="w-8 h-8 rounded-full" src="{{asset('image/avatar.jpg')}}" alt=""/>
                            <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                            <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                        </div>
                    </div>
                    <div class="p-2 md:block text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Alex Hurtado</h2>
                        <p class="text-xs text-gray-500"> Admin </p>
                    </div>
                </button>
                <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                    <li>
                        <a href="" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-600 hover:bg-gray-50">Perfil</a>
                    </li>
                    <li>
                        <a href="#" class="hidden flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-600 hover:bg-gray-50">Settings</a>
                    </li>
                    <li>
                        <form method="POST" action="">
                            @csrf
                            <button type="submit" role="menuitem" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-600 hover:bg-gray-50 cursor-pointer">
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end navbar -->
    <div >
        <!-- Content -->
       @yield('content')
        <!-- End Content -->
    </div>



</main>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
</body>
</html>
