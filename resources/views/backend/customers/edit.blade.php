<x-app-layout>

    <div class="dark:text-gray-200">
        {{ $customer->id }}
    </div>
    <div class="dark:text-gray-200">
        {{ $customer->name }}
    </div>



    <div class="dark:text-gray-200">
        @forelse ($customerAppointments as $customerAppointment)
            <li><a
                    href="{{ route('appointments.edit', $customerAppointment->id) }}">{{ $customerAppointment->complaint }}</a>
            </li>
        @empty
            <p>No customerAppointments</p>
        @endforelse
    </div>

</x-app-layout>
