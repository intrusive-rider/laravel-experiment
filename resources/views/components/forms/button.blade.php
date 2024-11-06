@props([
    'icon' => 'square',
    'kind' => 'button',
])

@php
    $style = [
        'bg-blue-600',
        'hover:bg-blue-500',
        'border-b-4 border-blue-900/75',
        'rounded-md',
        'flex items-center',
        'px-4 py-2',
        'font-bold',
        'w-fit h-fit',
        'transition-colors duration-300',
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