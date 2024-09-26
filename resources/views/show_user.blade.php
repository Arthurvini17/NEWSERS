<div>
    <table class="w-full h-full text-white table-fixed sm:w-full sm:h-full sm:table-fixed bg-slate-900">
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
                        <button class="px-2 text-xs truncate bg-blue-600 rounded-md sm:w-32 sm:text-center">Edit</button>
                    </a>
                    <form action="{{route('users.destroy', $user->id)}} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-2 text-xs bg-red-600 rounded-md sm:w-32 sm:text-center"   type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>Não há usuarios adicionados</p>
            @endforelse
        </tbody>
    </table>
</div>