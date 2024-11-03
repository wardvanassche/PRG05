@foreach ($users as $user)
    <tr class="even:bg-gray-800 odd:bg-gray-700">
        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
            {{ $user->id }}
        </th>
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
            <a href=""
               class="font-medium text-blue-400 hover:underline">Delete</a>
        </td>
    </tr>
@endforeach
