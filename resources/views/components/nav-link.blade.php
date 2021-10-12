@props(['active' => false])

@php
    $classes = 'class="items-center p-4 bg-blue-500 font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150"';

    if ($active) {
        $classes .= ' bg-blue-700 text-white ';
    }
@endphp


<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>