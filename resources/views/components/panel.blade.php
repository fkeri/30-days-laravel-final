@php
    $defaultClasses =
        'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300';
@endphp

<div {{ $attributes->merge(['class' => $defaultClasses]) }}>
    {{ $slot }}
</div>
