@props([
    'name' => '',
])

@php
    $defaults = [
        'type' => 'file',
        'id' => $name,
        'name' => $name,
        'class' => 'file-input file-input-bordered w-full grow',
        'value' => old($name),
    ];
@endphp

<div class="space-y-2">
    <label for="{{ $name }}" class="form-control w-full">
        <input {{ $attributes($defaults) }} />
    </label>
    <x-forms.error :error="$errors->first($name)" />
</div>
