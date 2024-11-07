<x-layout>
    <div class="space-y-10">
        <section class="flex flex-col items-center justify-center text-center py-6 space-y-3">
            <h1 class="text-4xl font-bold">Results for {{ $query }}</h1>

            <x-forms.form action="/search">
                <x-forms.input name="q" placeholder="I'm looking for..." />
            </x-forms.form>
        </section>
        @if ($jobs->isEmpty())
            <h3 class="text-center text-lg italic">Sorry, no jobs found with that criteria.</h3>
        @endif
        <section>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
