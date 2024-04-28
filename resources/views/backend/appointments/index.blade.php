<x-app-layout>

    <div class="dark:text-gray-200">
        @forelse ($appointments as $appointment)
            <li><a href="{{ route('appointments.edit', $appointment->id) }}">{{ $appointment->complaint }}</a></li>
        @empty
            <p>No appointment</p>
        @endforelse
    </div>

</x-app-layout>
