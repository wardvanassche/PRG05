@foreach ($users as $user)
    <tr class="even:bg-gray-800 odd:bg-gray-700">
        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
            {{ $user->id }}
        </th>
        <td class="px-6 py-4 text-white">
            @if($user->is_admin)
                Admin
            @else
                User
            @endif
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
        <td class="px-6 py-4 text-white">
            {{ $user->updated_at }}
        </td>
        <td class="px-6 py-4 text-white">
            <a href="{{ route('users.edit', $user->id) }}" class="font-bold text-blue-400 hover:underline">
                Edit
            </a>
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
