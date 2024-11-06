<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <x-page-heading>Results for {{ $query }}</x-page-heading>

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="I'm looking for..." />
            </x-forms.form>
        </section>
        @if ($jobs->isEmpty())
            <h3 class="text-center text-lg">Sorry, no jobs found with that criteria.</h3>
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
