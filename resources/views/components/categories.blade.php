@foreach ($categories as $category)
    <tr class="even:bg-gray-800 odd:bg-gray-700">
        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
            {{ $category->id }}
        </th>
        <td class="px-6 py-4 text-white">
            {{ $category->name }}
        </td>
        <td class="px-6 py-4">
            Delete
        </td>
    </tr>
@endforeach
