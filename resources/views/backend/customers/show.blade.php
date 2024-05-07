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

        <div class="text-end">
            {{-- Edit Button --}}
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-900"
                href="{{ route('customers.edit', $customer->id) }}">
                @lang('general.Edit')
            </a>
        </div>

        <div class="md:grid grid-cols-8 gap-8">
            {{-- Avatar --}}
            <div>
                <img class="inline-block size-20 md:size-fit rounded-lg" src="{{ $customer->avatar }}"
                    alt="Image Description">
            </div>
            <div class="col-span-7 mt-4 md:mt-0 flex flex-col gap-y-4">
                <div class="flex flex-wrap gap-12">
                    {{-- Full Name --}}
                    <div class="size-fit">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.FullName')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->name . ' ' . $customer->surname }}
                        </h5>
                    </div>
                    {{-- Phone number --}}
                    <div class="size-fit">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.IdentificationNumber')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->identification_number }}
                        </h5>
                    </div>
                    {{-- Birtday --}}
                    <div class="size-fit">
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                            @lang('general.Birthday')
                        </p>
                        <h5 class="text-gray-800 dark:text-neutral-200">
                            {{ $customer->birthday }} <code
                                class="text-gray-400 dark:text-neutral-400 text-sm">({{ $customer->age }})</code>
                        </h5>
                    </div>
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

                <div class="flex gap-x-12">
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



    <div class="bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 p-2 md:p-5">
        <div class="border-b border-gray-200 dark:border-neutral-700">
            <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-8 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active"
                    id="tabs-with-icons-item-1" data-hs-tab="#tabs-with-icons-1" aria-controls="tabs-with-icons-1"
                    role="tab">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    @lang('general.Activity')
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-8 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                    id="tabs-with-icons-item-2" data-hs-tab="#tabs-with-icons-2" aria-controls="tabs-with-icons-2"
                    role="tab">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                    @lang('general.CustomerInformation')
                </button>
                <button type="button"
                    class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-8 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500"
                    id="tabs-with-icons-item-3" data-hs-tab="#tabs-with-icons-3" aria-controls="tabs-with-icons-3"
                    role="tab">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    @lang('general.CustomerSettings')
                </button>
            </nav>
        </div>

        <div class="mt-3">
            <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">
                <!-- Item -->
                @forelse ($customerAppointments as $customerAppointment)
                    <div class="flex gap-x-3">
                        <!-- Left Content -->
                        <div class="w-16 text-end">
                            <span
                                class="text-xs text-gray-500 dark:text-neutral-400">{{ $customerAppointment->appointment_date }}</span>
                        </div>
                        <!-- End Left Content -->

                        <!-- Icon -->
                        <div
                            class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                            <div class="relative z-10 size-7 flex justify-center items-center">
                                <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                            </div>
                        </div>
                        <!-- End Icon -->

                        <!-- Right Content -->
                        <div class="grow pt-0.5 pb-8">
                            <a href="{{ route('appointments.edit', $customerAppointment->id) }}"
                                class="block dark:hover:bg-neutral-700 p-2 rounded">
                                <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                        </path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" x2="8" y1="13" y2="13">
                                        </line>
                                        <line x1="16" x2="8" y1="17" y2="17">
                                        </line>
                                        <line x1="10" x2="8" y1="9" y2="9">
                                        </line>
                                    </svg>
                                    {{ $customerAppointment->complaint }}
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    {{ Str::limit($customerAppointment->notes, 50, '...') }}
                                </p>
                            </a>
                            @switch($customerAppointment->status)
                                @case('waiting')
                                    <div class="mt-2">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full dark:bg-blue-500/10 dark:text-blue-500">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <line x1="12" x2="12" y1="2" y2="6">
                                                </line>
                                                <line x1="12" x2="12" y1="18" y2="22">
                                                </line>
                                                <line x1="4.93" x2="7.76" y1="4.93" y2="7.76">
                                                </line>
                                                <line x1="16.24" x2="19.07" y1="16.24" y2="19.07">
                                                </line>
                                                <line x1="2" x2="6" y1="12" y2="12">
                                                </line>
                                                <line x1="18" x2="22" y1="12" y2="12">
                                                </line>
                                                <line x1="4.93" x2="7.76" y1="19.07" y2="16.24">
                                                </line>
                                                <line x1="16.24" x2="19.07" y1="7.76" y2="4.93">
                                                </line>
                                            </svg>
                                            @lang('general.Waiting')
                                        </span>
                                    </div>
                                @break

                                @case('cancelled')
                                    <div class="mt-2">
                                        <span
                                            class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z">
                                                </path>
                                                <path d="M12 9v4"></path>
                                                <path d="M12 17h.01"></path>
                                            </svg>
                                            @lang('general.Cancelled')
                                        </span>
                                    </div>
                                @break

                                @case('complete')
                                    <div class="mt-2">
                                        <span
                                            class="py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                            <svg class="flex-shrink-0 size-3" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z">
                                                </path>
                                                <path d="m9 12 2 2 4-4"></path>
                                            </svg>
                                            @lang('general.Completed')
                                        </span>
                                    </div>
                                @break
                            @endswitch
                        </div>
                        <!-- End Right Content -->
                    </div>
                    @empty
                        <p class="text-gray-500 dark:text-neutral-400">
                            @lang('general.NotFound') @lang('general.Activity')
                        </p>
                    @endforelse
                    <!-- End Item -->
                </div>
                <!-- End Timeline -->
            </div>
            <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2">
                <p class="text-gray-500 dark:text-neutral-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">second</em> item's tab
                    body.
                </p>
            </div>
            <div id="tabs-with-icons-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-3">
                <p class="text-gray-500 dark:text-neutral-400">
                    This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">third</em> item's tab
                    body.
                </p>
            </div>
        </div>
        </div>

    </x-app-layout>
