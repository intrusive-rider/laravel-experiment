@props(['company', 'size' => 'lg'])

@php
    if ($size === 'sm') {
        $style = 'size-[42px]';
    } else {
        $style = 'size-[90px]';
    }
@endphp

<img src="{{ asset($company->logo) }}" alt="bishbishbish" class="rounded-lg object-cover {{ $style }}">
