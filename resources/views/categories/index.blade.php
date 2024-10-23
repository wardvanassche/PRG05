<x-app-layout title="Categories">
    <div class="w-3/4 m-auto my-10">
        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase bg-gray-600">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @include('components.categories')
            </tbody>
        </table>
    </div>
</x-app-layout>
