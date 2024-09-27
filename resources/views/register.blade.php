<div>
    @extends('layouts.master')

    @section('content')
    <div class="flex flex-col items-center min-h-screen bg-slate-900">

        <div class="m-10">
            <h1 class="text-4xl font-bold text-pink-700 font-roboto">Login</h1>
            <span class="block w-full mt-1 border-b border-pink-700"></span>
        </div>
        <form action="{{route('create.user')}} " method="POST" class="gap-4 text-xl text-white font-poppins">
            @csrf 

            <div class="flex flex-col items-center justify-center gap-4">
                <div>
                    <label for="username">Username</label>
                    <input
                        class="w-full h-16 text-pink-500 placeholder-pink-600 bg-transparent border-b-2 outline-none "
                        type="text" name="username" placeholder="Type your username">
                        @error('username')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input class="w-full h-16 text-pink-500 placeholder-pink-600 bg-transparent border-b-2 outline-none"
                        type="password" name="password" placeholder="Type your password">
                </div>

                <div>
                    <button type="submit"
                        class="text-4xl font-semibold rounded-md text-slate-50 w-80 font-roboto bg-slate-500">Register</button>
                </div>
            </div>

            <div class="flex justify-end mt-2">
                <p class="">Forgot password?</p>
            </div>

        </form>


        <div class="flex flex-col items-center gap-4">
            <div>
                <p class="text-2xl text-slate-200">Or sign up Using</p>
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
</div>
