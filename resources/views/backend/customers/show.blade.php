<x-app-layout>

    {{-- <div class="dark:text-gray-200">
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
    </div> --}}




    <div class="bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 p-2 md:p-5">

        <div class="md:grid grid-cols-8 gap-8">
            <div>
                <img class="inline-block size-20 md:size-full rounded-lg" src="{{ $customer->avatar }}"
                    alt="Image Description">
            </div>
            <div class="col-span-7 mt-4 md:mt-0 flex flex-col gap-y-4">
                <div class="flex gap-4">
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.FullName')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->name . ' ' . $customer->surname }}
                        </h5>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.PhoneNumber')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->name . ' ' . $customer->surname }}
                        </h5>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.PhoneNumber')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->name . ' ' . $customer->surname }}
                        </h5>
                    </div>
                    <a class="ms-auto py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-900"
                        href="{{ route('customers.edit', $customer->id) }}">
                        @lang('general.Edit')
                    </a>
                </div>

                <div class="flex items-center gap-2 border-t border-b border-gray-500 py-3">
                    <div>
                        <a href="tel:{{ $customer->phone_number }}"
                            class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 hover:bg-teal-200 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500 dark:hover:bg-teal-500/20">
                            {{ $customer->phone_number }}
                        </a>
                    </div>
                    <div>
                        <a href="mailto:{{ $customer->email }}"
                            class="py-2 px-4 inline-flex items-center gap-x-1 text-sm font-medium bg-teal-100 hover:bg-teal-200 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500 dark:hover:bg-teal-500/20">
                            {{ $customer->email }}
                        </a>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.relative')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->relative }}
                        </h5>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.PhoneNumber')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            <a href="tel:{{ $customer->relative_phone }}"
                                class="text-blue-600 decoration-2 hover:underline dark:text-blue-500">{{ $customer->relative_phone }}</a>
                        </h5>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.full_name')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->name . ' ' . $customer->surname }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>





    </div>





</x-app-layout>
