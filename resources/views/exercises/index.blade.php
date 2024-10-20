<x-app-layout title="Exercises">
    <ul>
        @foreach($exercises as $exercise)
            <li>{{ $exercise->id }}</li>
            <li>{{ $exercise->name }}</li>
            <li>{{ $exercise->category }}</li>
            <li>{{ $exercise->description }}</li>
            <li>{{ $exercise->user_id }}</li>
        @endforeach
    </ul>
</x-app-layout>
