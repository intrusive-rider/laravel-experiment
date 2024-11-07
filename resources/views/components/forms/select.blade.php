@props(['name', 'placeholder' => ''])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'select select-bordered w-full',
    ];
@endphp

<div class="space-y-2">
    <select {{ $attributes($defaults) }}>
        <option disabled selected>{{ $placeholder }}</option>
        {{ $slot }}
    </select>
    <x-forms.error :error="$errors->first($name)" />
</div>
