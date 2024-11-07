<x-layout class="flex h-screen max-w-none" style="padding: 0px;">
    <div class="w-2/5 px-12 flex flex-col items-start justify-center">
        <h1 class="text-4xl font-bold">Log in</h1>

        <x-forms.form method="POST" action="/login">
            <div class="space-y-6">
                <x-forms.input name="email" type="email" placeholder="Email" required />
                <x-forms.input name="password" type="password" placeholder="Password" required />
            </div>

            <div class="flex items-baseline justify-between">
                <div class="flex gap-3">
                    <x-forms.button>Log in</x-forms.button>
                    <a href="/" class="btn btn-ghost">Cancel</a>
                </div>
                <div class="flex flex-col gap-3">
                    <x-link href="/register" class="self-end">Register instead</x-link>
                    <x-link href="/register/employer" class="self-end">Employers</x-link>
                </div>
            </div>
        </x-forms.form>
    </div>

    <div class="grow w-grow bg-base-200" style="margin-top: 0px !important"></div>
</x-layout>
