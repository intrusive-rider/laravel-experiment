{{-- <x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            @guest
                <x-page-heading>Your dream job awaits you!</x-page-heading>
            @endguest
            @auth
                <x-page-heading>Hello, {{ Auth::user()->name }}.</x-page-heading>
            @endauth

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="I'm looking for..." />
            </x-forms.form>
        </section>

        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featured_jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recently Added</x-section-heading>
            <div class="mt-6 space-y-6">
                {{ $jobs->links() }}
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout> --}}

<x-layout>
    <main class="max-w-[986px] mx-auto space-y-12 pb-12">
        <section class="flex flex-col items-center justify-center text-center py-6 space-y-3">
            @guest
                <h1 class="text-4xl font-bold">Your dream job awaits you!</h1>
            @endguest
            @auth
                <h1 class="text-4xl font-bold">Hello, {{ Auth::user()->name }}.</h1>
            @endauth

            <x-forms.form action="/search">
                {{-- <x-forms.input :label="false" name="q" placeholder="I'm looking for..." /> --}}
                <x-forms.input name="q" placeholder="I'm looking for..." />
            </x-forms.form>
        </section>
        <section class="space-y-6">
            <h2 class="text-2xl font-bold">Featured Jobs</h2>
            <div class="grid lg:grid-cols-3 gap-8">
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
    </main>
</x-layout>
