<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title> <!-- Título dinâmico -->
   
</head>

<body>
    @section('header') <!-- Seção do header -->
        <header>
            <div class="flex items-center justify-between p-4 text-white bg-black">
                <h1 class="text-sm">Meu Site</h1>
                <nav class="flex flex-row">
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-sm sm:text-base md:text-lg">Home</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    @show

    <div class="container mx-auto">
        @yield('content') <!-- Conteúdo específico da página -->
    </div>

    

</body>

</html>
