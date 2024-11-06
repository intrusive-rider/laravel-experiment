<x-layout>
    <main class="flex h-screen">
        <div class="w-2/5 pl-6 pr-12 flex flex-col items-start justify-center space-y-6">
            <h1 class="text-4xl font-bold">Log in</h1>

            <x-forms.form method="POST" action="/login">
                <x-forms.input name="email" type="email"  placeholder="Email" />
                <x-forms.input name="password" type="password"  placeholder="Password" />

                <div class="flex justify-between items-baseline">
                    <x-forms.button>Log in</x-forms.button>
                    <div class="flex flex-col gap-3">
                        <x-link href="/register" class="self-end">Register instead</x-link>
                        <x-link href="/register/employer" class="self-end">Employers</x-link>
                    </div>
                </div>
            </x-forms.form>
        </div>

        <div class="grow w-grow bg-base-200"></div>
    </main>
</x-layout>
