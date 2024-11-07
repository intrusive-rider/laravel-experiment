<!DOCTYPE html>
<html lang="en">

<x-head />

@php
    $route_exception = [
        '/login', 
        '/register',
        '/register/employer',
    ];
@endphp

<body class="antialiased min-h-screen flex flex-col">
    @unless (in_array(\Request::getRequestUri(), $route_exception))
        <x-nav />
    @endunless

    <main {{ $attributes(['class' => 'flex-grow w-full max-w-[986px] mx-auto space-y-12 px-6']) }}>
        {{ $slot }}
    </main>

    @unless (in_array(\Request::getRequestUri(), $route_exception))
        <x-footer />
    @endunless
</body>

</html>
