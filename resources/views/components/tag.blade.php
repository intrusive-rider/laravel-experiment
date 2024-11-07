@props([
    'size' => 'base',
    'tag',
])

@php
    $style = 'badge badge-neutral border border-white/10 hover:bg-white/25';

    if ($size === 'base') {
        $style .= ' badge-lg';
    }

    if ($size === 'small') {
        $style .= ' badge-sm';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $style }}">{{ $tag->name }}</a>