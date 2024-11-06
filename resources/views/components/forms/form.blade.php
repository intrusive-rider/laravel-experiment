@props(['method' => 'GET'])

@php
    $method = strtoupper($method);
    $isPostOverride = !in_array($method, ['GET', 'POST']);
@endphp

<form {{ $attributes(['class' => 'max-w-2xl mx-auto space-y-6']) }}
    method="{{ $method === 'GET' ? 'GET' : 'POST' }}">
    @csrf
    @if ($isPostOverride)
        @method($method)
    @endif
    {{ $slot }}
</form>