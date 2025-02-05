<div class="h-screen ">
    @extends('layouts.master')
    @section('title', 'home')
    @section('header')
    @parent
    @endsection
    @section('content')

    
    @if($search)
    <h2>User search: {{$search}}</h2>
    @else
    <h2>User No found</h2>
    @endif
    <table class="w-screen text-white table-fixed ">
        <thead class=" bg-slate-950 sm:text-3xl">
            <tr class="text-center ">
                <th class="">Nome</th>
                <th>Gender</th>
                <th>Email</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr class="text-center border border-slate-800">
                <td class="px-2 truncate border border-gray-300 sm:text-2xl">{{ $user->name }}</td>
                <td class="px-2 border border-gray-300 sm:text-2xl">{{$user->gender ?? 'No Gender'}}</td>
                <td class="w-4 px-2 text-sm truncate border border-gray-300 sm:text-2xl">{{ $user->email }}</td>
                <td class="flex gap-2 px-2 text-center truncate border border-gray-300 sm:text-xl md:justify-center">
                    <a href="#">
                        <button
                            class="px-2 text-xs truncate bg-blue-600 rounded-md sm:w-32 sm:text-center">Edit</button>
                    </a>
                    <form action="{{route('users.destroy', $user->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-2 text-xs bg-red-600 rounded-md sm:w-32 sm:text-center"
                            type="submit">Delete</button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="4">Não há usuários adicionados</td>
            </tr>
            @endforelse


        </tbody>
        {{--
        <div class="pagination">
        </div> --}}

    </table>

    
   
</div>

@endsection