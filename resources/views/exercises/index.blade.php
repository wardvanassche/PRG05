<x-app-layout title="Exercises">
    <ul>
        @foreach($exercises as $exercise)
            <li>{{ $exercise->name }}</li>
            <li>{{ $exercise->category }}</li>
        @endforeach
    </ul>
</x-app-layout>
