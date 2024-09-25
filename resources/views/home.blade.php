@extends('layouts.master')
<!-- Extende o layout master -->
@section('title', 'Home')


@section('header')
@parent
@endsection

@section('content')

<div>

    <div class="m-2 ">
        <button id="openModal" class="p-2 text-2xl font-bold text-center bg-red-400 rounded-md font-roboto">+ Add new user</button>
    </div>

    
<div id="myModal" style="display: none;"
    class="fixed inset-0 flex items-center justify-center mt-10 text-white transition ease-in-out bg-slate-900">
    <div class="flex flex-col items-center justify-center h-1/2 shadow-inherit">
        <form method="POST" action="{{route('create.user')}}" class="">
            @csrf

            <div class="">
                <label for="name">Name user</label>
                <input class="flex w-full gap-2 px-4 border border-pink-600 rounded-tr-lg bg-slate-900 placeholder:text-white" type="text" name="name" placeholder="Name here">
            </div>


            <div class="">
                <label for="name">Email user</label>
                <input class="flex w-full gap-2 px-4 border border-pink-600 rounded-tr-lg bg-slate-900 placeholder:text-white" type="email" name="email" placeholder="Email here">
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="p-2 mt-2 bg-red-400 rounded-md">Create</button>
            </div>
        </form>
        <span class="text-4xl" id="closeModal" style="cursor: pointer;">&times; </span>
    </div>
</div>



@include('show_user', ['users' => $users])


</div>

@endsection