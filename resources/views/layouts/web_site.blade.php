<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('image/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    @vite(['resources/css/style.css'])
</head>
<body class="c-bg-customBackground flex flex-col min-h-screen">

<header class=" ">
    <div class="flex items-center justify-between">
        <div class="ml-2">
            <img src="{{asset('image/logo.png')}}" alt="">
        </div>


        <div class="mr-2">
            <div class="flex"> <x-icons.login></x-icons.login>   <a href="{{route('login')}}">Inicio</a></div>
            <div>servicio@cvauditores.com</div>
            <div>302 456 98 65</div>
            <div>315 789 45 97 </div>
        </div>
    </div>

    <nav  class="c-bg-blue py-2" >
      <ul class="flex text-white font-bold   ml-16">
          <li class="mx-10"><a href="{{route('home')}}">Home</a></li>
          <li class="mx-10"><a href="{{route('service')}}">Servicios</a></li>
          <li class="mx-10"><a href="{{route('contact')}}">Contacto</a></li>
      </ul>
    </nav>

    @php
        $url = url()->current();
        $path = '';
        if ( str_contains( $url, 'home' )  ){
        $path = 'image/home_banner.png';
        }elseif ( str_contains( $url, 'service' ) ){
            $path = 'image/service_banner.png';
        }elseif ( str_contains( $url, 'contact' ) ){
            $path = 'image/teem_banner.png';
        }
    @endphp

     <div>
         <img src="{{asset( $path )}}" alt="">
     </div>
</header>


<main class="flex-grow ">
    @yield('content')
</main>



<footer class="c-bg-blue flex justify-between items-center py-10 px-10">
  <div class="text-white  font-semibold">
      <p>Horario de atención:</p>
      <p>Lunes a Viernes de</p>
      <p>8:00 am – 12:00 pm.</p>
      <p>Y de 2:00 pm a 6:00 pm</p>
  </div>

    <div class="text-white  font-semibold">
          <p>Síguenos en nuestras redes</p>
        <div class="flex justify-between mt-4">
            <img src="{{asset('image/face.png')}}" width="30">
            <img src="{{asset('image/instagram.png')}}" width="30" alt="">
            <img src="{{asset('image/linkedin.png')}}" width="30" alt="">
        </div>
    </div>

</footer>

</body>
</html>
