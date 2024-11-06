@props([
    'name' => '',
    'icon' => 'square',
])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'grow',
        'value' => old($name),
    ];
@endphp

{{-- <x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field> --}}

<label for="{{ $name }}" class="input input-bordered flex items-center gap-3">
    <i class="ph-fill ph-{{ $icon }} text-lg"></i>
    <input {{ $attributes($defaults) }} />
</label>
