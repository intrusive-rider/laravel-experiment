@props([
    'size' => 'base',
    'tag',
])

@php
    $style = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'base') {
        $style .= ' text-sm px-5 py-1';
    }

    if ($size === 'small') {
        $style .= ' text-2xs px-3 py-1';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $style }}">{{ $tag->name }}</a>