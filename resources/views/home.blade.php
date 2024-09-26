@extends('layouts.master')
<!-- Extende o layout master -->
@section('title', 'Home')


@section('header')
@parent
@endsection

@section('content')

<div>

    
<div id="myModal" style="display: none;"
    class="fixed inset-0 flex items-center justify-center text-white bg-slate-900 opacity-90 ">
    <div class="flex flex-col items-center justify-center w-full h-full shadow-inherit">
        <form method="POST" action="{{route('create.user')}}" class="">
            @csrf

            <div class=" h-96">
            <div class="flex items-center justify-center">
                <h1 class="animate-pulse">Add your user</h1>
            </div>
            <div class="">
                <label for="name">Name user</label>
                <input class="flex w-full h-full gap-2 px-4 border border-pink-600 rounded-tr-lg bg-slate-900 placeholder:text-white" type="text" name="name" placeholder="Name here">
            </div>


            <div class="">
                <label for="name">Email user</label>
                <input class="flex w-full h-full gap-2 px-4 border border-pink-600 rounded-tr-lg bg-slate-900 placeholder:text-white" type="email" name="email" placeholder="Email here">
            </div>


            <div class="w-full">
                <label for="name">Your Gender</label>
                <select  class="flex w-full h-full gap-2 px-4 border border-pink-600 rounded-tr-lg bg-slate-900 placeholder:text-white" name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option class="" value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="p-2 mt-2 bg-red-400 rounded-md">Create</button>
            </div>
        <span class="text-4xl" id="closeModal" style="cursor: pointer;">&times; </span>

        </div>

        </form>
    </div>
</div>





</div>

@include('show_user', ['users' => $users])

<div class="flex items-center justify-center m-2 ">
    <button id="openModal" class="flex items-center p-2 text-2xl font-bold text-center bg-red-400 rounded-md md:hidden font-roboto">+</button>


    <button id="openModalMD" class="items-center hidden p-2 text-2xl font-bold text-center bg-red-400 rounded-md md:block font-roboto">Adicionar usuario</button>
</div>

@endsection