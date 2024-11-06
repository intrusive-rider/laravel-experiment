<x-layout>
   <x-page-heading>Register</x-page-heading>

   <x-forms.form method="POST" action="/register">
      <x-forms.input label="Your name" name="name" />
      <x-forms.input label="Email" name="email" type="email" />
      <x-forms.input label="Password" name="password" type="password" />
      <x-forms.input label="Confirm password" name="password_confirmation" type="password" />

      <div class="flex justify-between items-baseline">
         <x-forms.button>Register</x-forms.button>
         <x-link href="/login">Log in instead</x-link>
      </div>
   </x-forms.form>
</x-layout>