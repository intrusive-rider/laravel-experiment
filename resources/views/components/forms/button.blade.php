@props([
    'icon' => 'square',
    'kind' => 'button',
])

@php
    $style = [
        'btn btn-primary',
    ];
@endphp

@if ($kind === 'button') 
    <button {{ $attributes->class($style) }}>
        <i class="ph-bold ph-{{ $icon }} text-lg"></i>
        <span class="ml-2">{{ $slot }}</span>
    </button>
@else
    <a {{ $attributes->class($style) }}>
        <i class="ph-bold ph-{{ $icon }} text-lg"></i>
        <span class="ml-2">{{ $slot }}</span>
    </a>
@endif