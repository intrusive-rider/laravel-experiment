@props(['job'])

<x-panel class="flex gap-x-6 hover:border-blue-500 group transition-colors duration-300">
    <div>
        <x-company-logo :company="$job->company" />
    </div>

    <div class="flex-1 flex flex-col justify-center">
        <a href="#" class="place-self-start text-sm text-gray-400">{{ $job->company->name }}</a>

        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-300">
            <a href="/jobs/{{ $job->id }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} — From ${{number_format($job->salary)}} | {{ $job->region->name }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach
    </div>
</x-panel>
