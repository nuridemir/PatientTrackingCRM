@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg dark:hover:bg-neutral-700 hover:bg-gray-100 dark:hover:text-neutral-300 dark:bg-neutral-700 bg-gray-100 dark:text-neutral-300'
            : 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg dark:bg-neutral-800 dark:text-neutral-400 dark:hover:bg-neutral-700 hover:bg-gray-100 dark:hover:text-neutral-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
