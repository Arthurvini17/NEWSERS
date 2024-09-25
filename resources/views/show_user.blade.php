<div>
    <table class="p-12 text-white table-fixed sm:w-full sm:h-full bg-slate-900">
        <thead class=" bg-slate-950">
            <tr class="text-center">
                <th class="">Nome</th>
                <th>Email</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr class="text-center border border-slate-800">
                <td class="px-2 truncate border border-gray-300">{{ $user->name }}</td>
                <td class="w-4 px-2 text-sm truncate border border-gray-300">{{ $user->email }}</td>
                <td class="flex gap-2 px-2 truncate border border-gray-300 sm:text-xl">
                    <a href="#">
                        <button class="bg-blue-600 rounded-md">Edit</button>
                    </a>
                    <form action="">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 rounded-md">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>Não há usuarios adicionados</p>
            @endforelse
        </tbody>
    </table>
</div>