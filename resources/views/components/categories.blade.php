<table class="min-w-full max-w-4xl mx-auto table-auto rounded-lg">
    <tbody>
    @foreach ($categories as $category)
        <tr class="even:bg-gray-700 odd:bg-gray-800">
            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                {{ $category->id }}
            </th>
            <td class="px-6 py-4 text-white">
                {{ $category->name }}
            </td>
            <!-- Action column moved to be more compact -->
            <td class="px-6 py-4 text-left">
                <a href="{{ route('categories.destroy', $category->id) }}"
                   class="text-red-500 font-bold hover:underline"
                   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this category?')) { document.getElementById('delete-form-{{ $category->id }}').submit(); }">
                    Delete
                </a>
                <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}"
                      method="POST"
                      style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
