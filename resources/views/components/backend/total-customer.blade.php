 <!-- Card -->
 <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
     <div class="p-4 md:p-5">
         <div class="flex items-center gap-x-2">
             <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                 Total Customers
             </p>
             <x-backend.hs-tooltip content="The number of daily users" />
         </div>

         <div class="mt-1 flex items-center gap-x-2">
             <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                 {{ $totalCustomerCount }}
             </h3>
             {{-- <span class="flex items-center gap-x-1 text-green-600">
                 <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                     <polyline points="16 7 22 7 22 13" />
                 </svg>
                 <span class="inline-block text-sm">
                     1.7%
                 </span>
             </span>
             <span class="flex items-center gap-x-1 text-red-500">
                 <svg class="inline-block size-4 self-center rotate-180" xmlns="http://www.w3.org/2000/svg"
                     width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                     <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                     <polyline points="16 7 22 7 22 13" />
                 </svg>
                 <span class="inline-block text-sm">
                     1.7%
                 </span>
             </span> --}}
         </div>
     </div>
 </div>
 <!-- End Card -->
