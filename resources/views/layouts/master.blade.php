<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    
    <title>@yield('title')</title> 
   
</head>

<body>
    @section('header') 
        <header class="">
            <div class="flex items-center justify-between w-screen p-4 text-white bg-black font-roboto">
                <h1 class="text-2xl font-roboto">NEWSERS</h1>
                <nav class="flex flex-row ">
                    <ul class="flex items-start gap-2">

                        <li><a href="#" class="mr-10 text-sm">Home</a></li>

                        @auth
                        <p>Olá, {{ Auth::user()->username }}</p>
                        
                        <a href="{{route('logout')}}">Logout</a>
                        @endauth

                    </ul>
                </nav>
            </div>
        </header>
    @show

    <div class="container mx-auto">
        @yield('content') 
    </div>

    

</body>

</html>
