<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('storage/image/logo/logo.jpeg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    @vite(['resources/css/style.css'])
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

@yield('content')
<div class="pl-10 " style="margin-bottom: 500px">
    <a  class="c-text-blue "  href="{{route('home')}}">Home</a>
</div>
</body>
</html>
