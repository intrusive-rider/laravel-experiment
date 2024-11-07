<x-layout>

    @php
        $tags = implode(',', $job->tags->pluck('name')->toArray());
    @endphp

    <x-page-heading>Edit job</x-page-heading>

    <x-forms.form :method="'PUT'" action="/jobs/{{ $job->id }}" id="edit-job">
        <x-forms.input label="Job title" name="title" :placeholder="fake()->jobTitle()" value="{{ $job->title }}" />

        <x-forms.input label="Salary ($)" name="salary" type="number" placeholder="12000" value="{{ $job->salary }}" />

        <div class="space-y-2">
            <x-forms.label label="Description" name="desc"></x-forms.label>

            <div>
                <div id="toolbar"
                    class="rounded-t-xl bg-white/10 border border-b-0 border-white/10 focus-within:ring-1 focus-within:ring-white px-3 py-2 w-full font-sans text-sm">
                    <button type="button"
                        class="ql-bold px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 uppercase tracking-widest text-base font-bold">B</button>
                    <button type="button"
                        class="ql-italic px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 uppercase tracking-widest text-base italic">I</button>
                    <button type="button"
                        class="ql-underline px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 uppercase tracking-widest text-base underline">U</button>
                    <button type="button"
                        class="ql-link px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 uppercase tracking-widest">Link</button>
                    <button type="button"
                        class="ql-image px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 uppercase tracking-widest">Image</button>
                </div>
                <div id="editor"
                    class="rounded-b-xl bg-white/10 border border-white/10 focus-within:ring-1 focus-within:ring-white px-3 py-2 w-full font-sans text-base">
                    {!! $job->desc !!}</div>
            </div>

            <input type="hidden" name="desc" id="desc" value="{!! $job->desc !!}" />

            <x-forms.error :error="$errors->first('desc')" />
        </div>

        <x-forms.input label="Region" name="region" :placeholder="fake()->city() . ', ' . fake()->stateAbbr()" value="{{ $job->region->name }}" />

        <x-forms.input label="Available until..." name="expire" type="date" value="{{ $job->expire }}" />

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black" {{ $job->schedule === 'Full-time' ? 'selected' : '' }}>Full-time</option>
            <option class="text-black" {{ $job->schedule === 'Part-time' ? 'selected' : '' }}>Part-time</option>
        </x-forms.select>

        <x-forms.checkbox label="Feature? (costs extra)" name="is_featured" :checked="$job->is_featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated, optional)" name="tags"
            placeholder="education,machinery,animal handling" value="{{ $tags }}" />

        <div class="flex justify-between">
            <x-forms.button form="edit-job">Edit</x-forms.button>
            <x-forms.button class="bg-red-500" form="delete-job">Delete</x-forms.button>
        </div>

    </x-forms.form>
</x-layout>

<x-forms.form action="/jobs/{{ $job->id }}" method="DELETE" class="hidden" id="delete-job" />
