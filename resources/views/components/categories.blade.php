@foreach ($categories as $category)
    <tr class="even:bg-gray-500 odd:bg-gray-400 border-b">
        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
            {{ $category->id }}
        </th>
        <td class="px-6 py-4">
            {{ $category->name }}
        </td>
        <td class="px-6 py-4">
            <a href=""
               class="font-medium text-black hover:underline">Edit</a>
        </td>
    </tr>
@endforeach
