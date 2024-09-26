<div>
    @extends('layouts.master')

    @section('title', 'Login')
    @section('content')
    <div class="flex flex-col items-center h-full bg-slate-900">

        <div class="m-10">
            <h1 class="text-4xl font-bold text-pink-700 font-roboto">Login</h1>
            <span class="block w-full mt-1 border-b border-pink-700"></span>
        </div>
        <form action="" class="gap-4 text-xl text-white font-poppins">

            <div class="flex flex-col items-center justify-center gap-2">
                <div>
                    <label for="username">Username</label>
                    <input
                        class="w-full h-16 text-pink-500 placeholder-pink-600 bg-transparent border-b-2 outline-none "
                        type="text" name="username" placeholder="Type your username">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input class="w-full h-16 placeholder-pink-600 bg-transparent border-b-2 outline-none"
                        type="password" name="password" placeholder="Type your password">
                </div>

                <div>
                    <button
                        class="text-4xl font-semibold text-black rounded-md w-80 font-roboto bg-slate-200">Login</button>

                </div>
            </div>
            <div class="flex items-end content-end justify-end">
                <p class="">Forgot password?</p>
            </div>

        </form>


        <div class="flex flex-col items-center gap-4">
            <div>
                <p class="text-2xl">Or sign up Using</p>
            </div>
            <div class="flex items-center justify-center gap-2">

                <img class="w-16 " src="{{asset('img/google.png')}}" alt="">


                <img class="w-16" src="{{asset('img/facebook.png')}}" alt="">

                <img class="w-16" src="{{asset('img/linkedin.png')}}" alt="">


            </div>
        </div>
    </div>

</div>

@endsection