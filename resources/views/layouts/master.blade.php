<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    
    <title>@yield('title')</title> 
   
</head>

<body>
    @section('header') 
        <header>
            <div class="flex items-center justify-between p-4 text-white bg-black font-roboto">
                <h1 class="text-2xl font-roboto">NEWSERS</h1>
                <nav class="flex flex-row">
                    <ul class="flex items-start justify-start">
                        <li><a href="#" class="mr-10 text-sm">Home</a></li>
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
