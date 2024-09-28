<div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])

    <div class="flex flex-col items-center min-h-screen bg-slate-900">

        <div class="m-10">
            <h1 class="text-4xl font-semibold text-white font-roboto">Newsers</h1>
            <span class="block w-full mt-1 border-b border-purple-200"></span>
        </div>
        <form action="{{route('auth')}} " method="POST" class="gap-4 text-xl text-white font-poppins">
            @csrf

            <div class="flex flex-col items-center justify-center gap-4">
                <div>
                    <label for="username">Username</label>
                    <input
                        class="w-full h-16 placeholder-gray-400 bg-transparent border-b-2 outline-none "
                        type="text" name="username" placeholder="Type your username">
                    @error('username')
                    <div class="text-red-700">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input class="w-full h-16 placeholder-gray-400 bg-transparent border-b-2 outline-none"
                        type="password" name="password" placeholder="Type your password">

                        @error('')
                        <div class="text-red-700">{{ $message }}</div>
                        @enderror
                </div>

                <div class="w-full">
                    <button type="submit"
                        class="w-full py-2 font-semibold bg-purple-800 rounded-md text-slate-50 font-roboto">Login</button>
                </div>
            </div>

            <div class="flex justify-end mt-4">
                <p class="">Forgot password?</p>
            </div>

        </form>

        <div class="flex flex-col items-center gap-8 mt-6">
            <div>
                <p class="text-2xl text-slate-200">Or Sign up using</p>
            <span class="block w-full mt-1 border-b border-purple-200"></span>

            </div>
            <div class="flex items-center justify-center gap-8">

                <img class="w-12 " src="{{asset('img/google.png')}}" alt="">


                <img class="w-12" src="{{asset('img/facebook.png')}}" alt="">

                <img class="w-12" src="{{asset('img/linkedin.png')}}" alt="">

            </div>
            

        <div>
            <p class="text-white">Alredy have an account? <span class="underline ">Sign in</span></p>
        </div>
            
        </div>

    </div>

</div>
