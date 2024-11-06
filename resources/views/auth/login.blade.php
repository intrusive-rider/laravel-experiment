<x-layout>
   <x-page-heading>Log in</x-page-heading>

   <x-forms.form method="POST" action="/login">
      <x-forms.input label="Email" name="email" type="email" />
      <x-forms.input label="Password" name="password" type="password" />

      <div class="flex justify-between items-baseline">
         <x-forms.button>Log in</x-forms.button>
         <div class="flex flex-col gap-3">
            <x-link href="/register" class="self-end">Register instead</x-link>
            <x-link href="/register/employer" class="self-end">Employers</x-link>
        </div>        
      </div>
   </x-forms.form>
</x-layout>