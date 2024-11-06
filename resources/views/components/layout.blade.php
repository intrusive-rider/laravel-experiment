<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="antialiased">
    <div class="px-6 space-y-12">
        <x-nav />
        <main class="max-w-[986px] mx-auto space-y-12 pb-12">
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</body>

</html>
