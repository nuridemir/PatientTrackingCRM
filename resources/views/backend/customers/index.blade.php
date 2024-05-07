<x-app-layout>

    <div class="dark:text-gray-200">
        @forelse ($customers as $customer)
            <li><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></li>
        @empty
            <p>No customer</p>
        @endforelse
    </div>


</x-app-layout>
