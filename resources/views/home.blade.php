@extends('layouts.master')
@section('title', 'Home')
@section('header')
@parent
@endsection
@section('content')
<div class="h-screen bg-slate-900">
    <div id="myModal" style="display: none;"
        class="fixed inset-0 flex items-center justify-center text-white bg-slate-900 opacity-90 ">
        <div class="flex flex-col items-center justify-center w-full h-full shadow-inherit">
            <form method="POST" action="{{route('create.user')}}" class="">
                @csrf

                <div class="w-full ">
                    <div class="flex items-center justify-center">
                        <h1 class="text-3xl font-semibold text-white animate-pulse ">Create your user</h1>
                    </div>
                    <div class="">
                        <label for="name">Name user</label>
                        <input
                            class="w-full py-2 placeholder-gray-400 border border-purple-600 rounded-tr-lg bg-slate-900"
                            type="text" name="name" placeholder="Name here">
                        @error('name')
                        <div class="text-red-700">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="">
                        <label for="name">Email user</label>
                        <input
                            class="w-full py-2 placeholder-gray-400 border border-purple-600 rounded-tr-lg bg-slate-900"
                            type="email" name="email" placeholder="Email here">

                        @error('email')
                        <div class="text-red-700">{{$message}}</div>
                        @enderror
                    </div>


                    <div class="w-full">
                        <label class=" text-gray-50" for="name">Your Gender</label>
                        <select
                            class="flex w-full h-full gap-2 px-4 border border-pink-600 rounded-tr-lg text-gray-50 bg-slate-900"
                            name="gender" id="gender">
                            <option class="text-gray-600 placeholder-gray-400" value="">Select Gender</option>
                            <option class="" value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                        @error('gender')
                        <div class="text-red-700">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="p-2 mt-2 bg-purple-600 rounded-tr-lg">Create</button>
                    </div>
                    <span class="flex items-center justify-center text-4xl" id="closeModal" style="cursor: pointer;">&times; </span>

                </div>

            </form>
        </div>
    </div>


 




    @include('show_user');
   

    <div class="flex items-center justify-center m-2 ">
        <button id="openModal" class="p-2 text-2xl font-bold bg-purple-800 rounded-md md:hidden font-roboto">+</button>


        <button id="openModalMD"
            class="items-center hidden p-2 text-2xl font-bold text-center bg-purple-800 rounded-md md:block font-roboto">Adicionar
            usuario</button>
    </div>
</div>
@endsection