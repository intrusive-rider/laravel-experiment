<x-layout class="flex h-screen max-w-none" style="padding: 0px;">
    <div class="w-2/5 px-12 flex flex-col items-start justify-center">
        <h1 class="text-4xl font-bold">Register</h1>

        <x-forms.form method="POST" action="/register/employer" enctype="multipart/form-data">

            <section class="space-y-6">
                <h2 class="text-2xl font-bold">Your profile</h2>
                <x-forms.input placeholder="Your name" name="name" required />
                <x-forms.input placeholder="Email" name="email" type="email" required />
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input placeholder="Password" name="password" type="password" required />
                    <x-forms.input placeholder="Confirm password" name="password_confirmation" type="password" required />
                </div>
            </section>

            <section class="space-y-6">
                <h2 class="text-2xl font-bold">Your company profile</h2>
                <div class="grid lg:grid-cols-2 gap-6">
                    <x-forms.input placeholder="Company name" name="company" required />
                    <x-forms.input placeholder="Website" name="url" required />
                </div>
                <div>
                    <div class="label">
                        <span class="label-text">Company logo</span>
                    </div>
                    <x-forms.file-input name="logo" required />
                </div>
            </section>

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
