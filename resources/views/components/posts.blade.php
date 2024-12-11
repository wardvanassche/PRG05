@foreach ($exercises as $exercise)
    <tr class="even:bg-gray-800 odd:bg-gray-700">
        <td class="px-6 py-4 font-medium whitespace-nowrap text-white">
            {{ $exercise->id }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $exercise->user_id }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $exercise->name }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $exercise->category->name }}
        </td>
        <td class="px-6 py-4 text-white max-w-xs truncate">
            {{ $exercise->description }}
        </td>
        <td class="px-6 py-4 text-white max-w-xs truncate">
            {{ $exercise->image }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $exercise->created_at }}
        </td>
        <td class="px-6 py-4 text-white">
            {{ $exercise->updated_at }}
        </td>
        <td class="px-6 py-4 text-white">
            <a href="{{ route('exercises.edit', $exercise->id) }}" class="font-bold text-blue-400 hover:underline">
                Edit
            </a>
        </td>
        <td class="px-6 py-4">
            <a href="{{ route('exercises.destroy', $exercise->id) }}"
               class="text-red-500 font-bold hover:underline"
               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this exercise?')) { document.getElementById('delete-form-{{ $exercise->id }}').submit(); }">
                Delete
            </a>
            <form id="delete-form-{{ $exercise->id }}" action="{{ route('exercises.destroy', $exercise->id) }}"
                  method="POST"
                  style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
@endforeach
