@props(['job'])

<x-panel class="flex flex-col text-center hover:border-blue-500 group transition-colors duration-300">
    <div class="place-self-start text-sm text-gray-400">{{ $job->company->name }}</div>

    <div class="py-8">
        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-300">
            <a href="/jobs/{{ $job->id }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">
            {{ $job->schedule }} — From ${{number_format($job->salary)}}<br>
            {{ $job->region->name }}
        </p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>

        <x-company-logo :company="$job->company" size="sm" />
    </div>
</x-panel>
