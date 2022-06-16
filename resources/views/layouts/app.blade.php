<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{asset('css/app.css') }} ">
    <link rel="stylesheet" href=" {{asset('css/nav.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/transaction.css')}} ">

</head>
<body>
    <nav class="p-3 bg-white flex justify-between  w-full fixed z-50 shadow-md">
        <ul>
            <li class="logo">Gestion de caisse</li>
        </ul>
        <ul class="nav_content  flex items-center">
            @if (auth()->user())
            <li>
                <a href="" class="p-3 " >{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
            </li>
            <li>
                <a href=" {{route('add_transaction')}} " class="pt-2 pl-3 pr-3 pb-2 bg-primary text-white p-3  rounded-full  hover:bg-secondary ease-in-out duration-300 ">Ajouter record</a>
                <a href="{{route('logout')}}" class="pt-2 pl-3 pr-3 pb-2 bg-primary text-white p-3 w-60 rounded-full  hover:bg-secondary ease-in-out duration-300 ">Logout</a>
            </li>
            
            @else
                <li>
                    <a href=" {{route('sign_in')}} " class="pt-2 pl-3 pr-3 pb-2 bg-primary text-white p-3 w-60 rounded-full  hover:bg-secondary ease-in-out duration-300">Login</a>
                </li>
                @endif
        </ul>
        <div class="menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            
        </div>
      
    </nav>

    @yield('dushboard')
    @yield('registre')
    @yield('sign_in')
    @yield('add_transaction')

    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src=" {{asset('js/nav.js')}} "></script>

</body>
</html>