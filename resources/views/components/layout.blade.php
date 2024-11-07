<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="antialiased">
    <div class="px-10">
        <x-nav />

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
