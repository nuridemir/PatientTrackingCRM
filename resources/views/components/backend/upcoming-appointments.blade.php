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
        <ul class="marker:text-blue-600 list-disc ps-5 space-y-2 text-sm text-gray-600 dark:text-neutral-400">
            @forelse ($upcomingAppointments as $upcomingAppointment)
                <li>
                    <a href="{{ route('appointments.edit', $upcomingAppointment->id) }}"
                        class="grid grid-cols-3 dark:hover:bg-neutral-700 p-2 rounded">
                        <div>
                            <span
                                class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $upcomingAppointment->complaint }}</span>
                            {{-- <span
                            class="block text-sm text-gray-500 dark:text-neutral-500">{{ Str::limit($upcomingAppointment->notes, 50, '...') }}</span> --}}
                        </div>
                        <div class="text-end">
                            <span
                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                {{ $upcomingAppointment->status == 'waiting' ? 'Waiting' : '' }}
                            </span>
                        </div>
                        <div class="text-end">
                            <span
                                class="block text-sm text-gray-500 dark:text-neutral-500">{{ $upcomingAppointment->appointment_date }}</span>
                        </div>
                    </a>
                </li>
            @empty
            @endforelse
    </div>

</div>
<!-- End Card -->
