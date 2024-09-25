@extends('layouts.master')
<!-- Extende o layout master -->
@section('title', 'Home')


@section('header')
@parent
@endsection

@section('content')

<div class="text-4xl flex items-center justify-center">

    <button id="openModal">+</button>
</div>

<div id="myModal" style="display: none;" class="">
    <div class="flex items-center justify-center flex-col">
        <form method="POST" action="{{route('create.user')}}">
            @csrf
            <div class="flex w-full gap-2">
                <label for="name">Name user</label>
                <input type="text" name="name" placeholder="Nome user ">
            </div>


            <div class="flex w-full gap-2">
                <label for="name">Email user</label>
                <input type="email" name="email" placeholder="Email user">
            </div>

            <button type="submit">Create</button>
        </form>
        <span id="closeModal" style="cursor: pointer;">&times; Fechar</span>
    </div>
</div>


@endsection