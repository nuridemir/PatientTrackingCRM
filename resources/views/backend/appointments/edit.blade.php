<x-app-layout>
    <div class="dark:text-gray-200">
        {{ $appointment->id }}
    </div>
    <div class="dark:text-gray-200">
        {{ $appointment->complaint }}
    </div>


    <div class="dark:text-gray-200">
        {{ $customer->id }}
        <br>
        {{ $customer->name }}
    </div>
</x-app-layout>
