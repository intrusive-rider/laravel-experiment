<x-layout>
    <x-page-heading>{{ $job->title }}</x-page-heading>

    <div class="flex gap-x-6 mb-6">
        <x-panel class="flex gap-x-6 grow">
            <div>
                <x-company-logo :company="$job->company" class="size-[90px]" />
            </div>

            <div class="flex-1 flex flex-col">
                <p class="place-self-start text-sm text-gray-400">Company</p>

                <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-300">
                    {{ $job->company->name }}
                </h3>

                <x-link href="{{ $job->company->url }}" class="text-sm mt-auto text-gray-400">{{ $job->company->url }}</x-link>
            </div>
        </x-panel>
        <x-panel class="flex gap-x-6 grow w-fit">
            <div class="flex-1 flex flex-col">
                <p class="place-self-start text-sm text-gray-400">Salary</p>

                <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-300">
                    From ${{ number_format($job->salary) }}
                </h3>

                <p class="place-self-start mt-auto text-sm text-gray-400">per month</p>
            </div>
        </x-panel>
        <x-panel class="flex gap-x-6 grow w-fit">
            <div class="flex-1 flex flex-col">
                <p class="place-self-start text-sm text-gray-400">Location</p>

                <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-300">
                    {{ $job->region->name }}
                </h3>

                <p class="place-self-start mt-auto text-sm text-gray-400">{{ $job->schedule }}</p>
            </div>
        </x-panel>
    </div>

    <div class="divider"></div>

    <div class="flex justify-between">
        <div class="flex gap-x-8">
            <p class=" text-gray-400">Available until: <br /> {{ date('F d, Y', strtotime($job->expire)) }}</p>
            <div class="space-y-12">
                <section class="space-y-4 max-w-prose">

                    <x-section-heading>Description</x-section-heading>

                    <p>{!! $job->desc !!}</p>

                    <x-section-heading>Tags</x-section-heading>

                    <div>
                        @foreach ($job->tags as $tag)
                            <x-tag :$tag />
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
        @role('employer|maintainer')
            @can('modify', $job)
                <a href="/jobs/{{ $job->id }}/edit" class="btn btn-primary">Edit</a>
            @endcan
        @endrole
    </div>

</x-layout>
