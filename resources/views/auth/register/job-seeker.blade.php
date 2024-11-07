<x-layout class="flex h-screen max-w-none" style="padding: 0px;">
    <div class="w-2/5 px-12 flex flex-col items-start justify-center">
        <h1 class="text-4xl font-bold">Register</h1>

        <x-forms.form method="POST" action="/register">
            <div class="space-y-6">
                <x-forms.input name="name" placeholder="Your name" required />
                <x-forms.input name="email" type="email" placeholder="Email" required />
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input name="password" type="password" placeholder="Password" required />
                    <x-forms.input name="password_confirmation" type="password" placeholder="Confirm password" required />
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
