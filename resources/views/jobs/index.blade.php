<x-layout>
    <section class="flex flex-col items-center justify-center text-center">
        @guest
            <h1 class="text-4xl font-bold">Your dream job awaits you!</h1>
        @endguest
        @auth
            <h1 class="text-4xl font-bold">Hello, {{ Auth::user()->name }}.</h1>
        @endauth

        <x-forms.form action="/search">
            <x-forms.input name="q" placeholder="I'm looking for..." />
        </x-forms.form>
    </section>
    <section class="space-y-6">
        <h2 class="text-2xl font-bold">Featured Jobs</h2>
        <div class="grid lg:grid-cols-3 gap-6">
            @foreach ($featured_jobs as $job)
                <x-job-card :$job />
            @endforeach
        </div>
    </section>

    <section class="space-y-6">
        <h2 class="text-2xl font-bold">Tags</h2>

        <div class="space-x-1">
            @foreach ($tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </section>
    <section class="space-y-6">
        <h2 class="text-2xl font-bold">Recently Added</h2>
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
        {{ $jobs->links() }}
    </section>
</x-layout>
