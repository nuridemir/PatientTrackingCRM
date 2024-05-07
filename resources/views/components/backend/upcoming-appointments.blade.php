<!-- Card -->
<div
    class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <h2 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            Yaklaşan Randevuler
        </h2>
        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-900"
            href="{{ route('appointments.index') }}">
            View all
        </a>
    </div>
    <!-- End Header -->

    <div class="mt-4">
        <!-- Timeline -->
        <div>
            @forelse ($upcomingAppointments as $upcomingAppointment)
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Left Content -->
                    <div class="w-16 text-end">
                        <span
                            class="text-xs text-gray-500 dark:text-neutral-400">{{ $upcomingAppointment->appointment_date }}</span>
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
                        <div>
                            <a href="{{ route('appointments.edit', $upcomingAppointment->id) }}"
                                class="block dark:hover:bg-neutral-700 p-2 rounded">
                                <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    <svg class="flex-shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                        </path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" x2="8" y1="13" y2="13"></line>
                                        <line x1="16" x2="8" y1="17" y2="17"></line>
                                        <line x1="10" x2="8" y1="9" y2="9"></line>
                                    </svg>
                                    {{ $upcomingAppointment->complaint }}
                                </h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                                    {{ Str::limit($upcomingAppointment->notes, 50, '...') }}
                                </p>
                            </a>
                            @foreach ($customers as $customer)
                                @if ($customer->id == $upcomingAppointment->customer_id)
                                    <a href="{{ route('customers.show', $customer->id) }}"
                                        class="mt-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700">

                                        <img class="flex-shrink-0 size-4 rounded-full"
                                            src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                            alt="Image Description">
                                        {{ $customer->name . ' ' . $customer->surname }}
                                    </a>
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Item -->
        @empty
            <p class="text-sm text-gray-600 dark:text-neutral-400">
                Randevu bulunamadı
            </p>
        @endforelse
    </div>
    <!-- End Timeline -->
</div>
<!-- End Card -->

</div>
