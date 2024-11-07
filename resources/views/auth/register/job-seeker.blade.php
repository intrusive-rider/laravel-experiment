<x-layout class="flex h-screen max-w-none px-0">
    <div class="w-2/5 px-12 flex flex-col items-start justify-center">
        <h1 class="text-4xl font-bold">Register</h1>

        <x-forms.form method="POST" action="/register">
            <div class="space-y-6">
                <x-forms.input name="name" placeholder="Your name" />
                <x-forms.input name="email" type="email" placeholder="Email" />
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input name="password" type="password" placeholder="Password" />
                    <x-forms.input name="password_confirmation" type="password" placeholder="Confirm password" />
                </div>
            </div>

            <div class="flex items-baseline justify-between">
                <div class="flex gap-3">
                    <x-forms.button>Register</x-forms.button>
                    <a href="/" class="btn btn-ghost">Cancel</a>
                </div>
                <x-link href="/login">Log in instead</x-link>
            </div>
        </x-forms.form>
    </div>

    <div class="grow bg-base-200" style="margin-top: 0px !important"></div>
</x-layout>
