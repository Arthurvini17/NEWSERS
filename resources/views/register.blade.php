<div>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
<div class="flex flex-col items-center min-h-screen p-4 bg-slate-900 md:p-10">
    

    <div class="m-4 text-center md:m-10">
        <h1 class="text-4xl font-semibold text-white font-roboto">Newsers</h1>

        <span class="block w-full mt-1 border-b border-purple-200"></span>
    </div>
    <form action="{{route('create.funcionario')}}" method="POST" class="w-full max-w-md gap-4 text-xl text-white font-poppins">
        @csrf
        <div class="flex flex-col items-center justify-center gap-4">
            <div class="w-full">
                <label for="username" class="block text-left">Username</label>
                <input class="w-full h-12 placeholder-gray-400 bg-transparent border-b-2 outline-none md:h-16"
                    type="text" name="username" placeholder="Type your username">
                @error('username')
                    <div class="text-red-700">{{ $message }}</div>
                @enderror
            </div>

            <div class="w-full">
                <label for="password" class="block text-left">Password</label>
                <input class="w-full h-12 placeholder-gray-400 bg-transparent border-b-2 outline-none md:h-16"
                    type="password" name="password" placeholder="Type your password">
                @error('password')
                    <div class="text-red-700">{{$message}}</div>
                @enderror
            </div>

            <div class="w-full">
                <button type="submit" class="w-full py-2 font-semibold bg-purple-800 rounded-md text-slate-50 font-roboto">Register</button>
            </div>
        </div>

        
    </form>
</div>
</div>