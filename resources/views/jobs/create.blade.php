<x-layout>
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold">Post a Job</h1>

        <x-forms.form :method="'POST'" action="/jobs" id="create-job">
            <div class="space-y-6">
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input name="title" placeholder="Job title" required />
                    <x-forms.input name="salary" type="number" placeholder="Salary (USD)" required />
                </div>

                <x-forms.textarea></x-forms.textarea>

                <div class="grid lg:grid-cols-2 gap-6 items-start">
                    <x-forms.input name="region" placeholder="Region" required />

                    <x-forms.select name="schedule" placeholder="Schedule" required>
                        <option {{ old('schedule') === 'Full-time' ? 'selected' : '' }}>Full-time</option>
                        <option {{ old('schedule') === 'Part-time' ? 'selected' : '' }}>Part-time</option>
                    </x-forms.select>

                    <div>
                        <div class="label">
                            <span class="label-text">Available until...</span>
                        </div>
                        <x-forms.input name="expire" type="date" required />
                    </div>

                    <div>
                        <div class="label">
                            <span class="label-text">Optional</span>
                        </div>
                        <x-forms.input name="tags" placeholder="Tags (comma separated)" />
                    </div>
                </div>

                <x-forms.checkbox name="is_featured">Feature? (costs extra)</x-forms.checkbox>

            </div>

            <div class="flex gap-3">
                <x-forms.button>Create</x-forms.button>
                <a href="/" class="btn btn-ghost">Cancel</a>
            </div>
        </x-forms.form>
    </div>
</x-layout>
