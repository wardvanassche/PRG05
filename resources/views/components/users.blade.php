@foreach ($users as $user)
    <tr class="even:bg-gray-800 odd:bg-gray-700">
        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
            {{ $user->id }}
        </th>
        <td class="px-6 py-4 text-white">

            <form action="{{ route('users.change_role', $user->id) }}" method="POST" id="role-form-{{ $user->id }}">
                @csrf
                @method('PUT')

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_admin" id="is_admin_{{ $user->id }}"
                           {{ $user->is_admin ? 'checked' : '' }}
                           class="sr-only peer" onchange="this.form.submit()">
                    <div
                        class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
            </form>

        </td>
        <td class="px-6 py-4 text-white">
            {{ $user->name }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $user->email }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $user->created_at }}
        </td>
        <td class="px-6 py-4">
            <a href="{{ route('users.destroy', $user->id) }}"
               class="text-red-500 font-bold hover:underline"
               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">
                Delete
            </a>
            <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST"
                  style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
@endforeach
