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

<div class="space-y-2">
    <label for="{{ $name }}" class="input input-bordered flex items-center gap-3">
        <i class="ph-fill ph-{{ $icon }} text-lg"></i>
        <input {{ $attributes($defaults) }} />
    </label>
    <x-forms.error :error="$errors->first($name)" />
</div>
