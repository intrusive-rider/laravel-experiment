<x-layout>
    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form :method="'POST'" action="/jobs" id="create-job">
        <x-forms.input label="Job title" name="title" :placeholder="fake()->jobTitle()" />
        <x-forms.input label="Salary ($)" name="salary" type="number" placeholder="12000" />

        <div class="space-y-2">
            <x-forms.label label="Description" name="desc" />

            <div>
                <div id="toolbar"
                    class="rounded-t-xl bg-white/10 border border-b-0 border-white/10 px-3 py-2 w-full font-sans">
                    <button type="button"
                        class="ql-bold px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 font-bold">B</button>
                    <button type="button"
                        class="ql-italic px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 italic">I</button>
                    <button type="button"
                        class="ql-underline px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 underline">U</button>
                    <button type="button"
                        class="ql-strike px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300 line-through">S</button>
                    <button class="ql-list px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300"
                        value="ordered" type="button">Num. list</button>
                    <button class="ql-list px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300"
                        value="bullet" type="button">Bullet list</button>
                </div>
                <div id="editor"
                    class="rounded-b-xl bg-white/10 border border-white/10 px-3 py-2 w-full font-sans text-base h-48">
                    {!! old('desc') !!}</div>
            </div>

            <x-forms.error error="{{ $errors->first('desc') }}" />

            <input type="hidden" name="desc" id="desc" />
        </div>

        <x-forms.input label="Region" name="region" :placeholder="fake()->city() . ', ' . fake()->stateAbbr()" />

        <x-forms.input label="Available until..." name="expire" type="date" />

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black">Full-time</option>
            <option class="text-black">Part-time</option>
        </x-forms.select>

        <x-forms.checkbox label="Feature? (costs extra)" name="featured?" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated, optional)" name="tags"
            placeholder="education,machinery,animal handling" />

        <x-forms.button>Create</x-forms.button>
    </x-forms.form>
</x-layout>
