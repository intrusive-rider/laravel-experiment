<x-layout>
    @php
        $tags = implode(',', $job->tags->pluck('name')->toArray());
    @endphp

    <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold">Edit job "{{ $job->title }}"</h1>

        <x-forms.form :method="'PUT'" action="/jobs/{{ $job->id }}" id="edit-job">
            <div class="space-y-6">
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input name="title" placeholder="Job title" value="{{ $job->title }}" required />
                    <x-forms.input name="salary" type="number" placeholder="Salary" value="{{ $job->salary }}" required />
                </div>

                <x-forms.textarea>{!! $job->desc !!}</x-forms.textarea>

                <div class="grid lg:grid-cols-2 gap-6 items-center">
                    <x-forms.input name="region" placeholder="Region" value="{{ $job->region->name }}" required />

                    <x-forms.select name="schedule" placeholder="Schedule" required >
                        <option {{ $job->schedule === 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option {{ $job->schedule === 'Part-time' ? 'selected' : '' }}>Part-time</option>
                    </x-forms.select>

                    <div>
                        <div class="label">
                            <span class="label-text">Available until...</span>
                        </div>
                        <x-forms.input name="expire" type="date" value="{{ $job->expire }}" required />
                    </div>

                    <div>
                        <div class="label">
                            <span class="label-text">Optional</span>
                        </div>
                        <x-forms.input name="tags" placeholder="Tags (comma separated)"
                            value="{{ $tags }}" />
                    </div>
                </div>

                <x-forms.checkbox name="is_featured" :checked="$job->is_featured === 1">Feature? (costs extra)</x-forms.checkbox>

            </div>

            <div class="flex justify-between">
                <div class="space-x-3">
                    <x-forms.button>Edit</x-forms.button>
                    <a href="/" class="btn btn-ghost">Cancel</a>
                </div>
                <x-forms.button class="btn-error" form="delete-job">Delete</x-forms.button>
            </div>
        </x-forms.form>
    </div>
</x-layout>

<x-forms.form action="/jobs/{{ $job->id }}" method="DELETE" class="hidden" id="delete-job" />
