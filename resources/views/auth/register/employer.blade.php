<x-layout>
   <x-page-heading>Register</x-page-heading>

   <x-forms.form method="POST" action="/register/employer" enctype="multipart/form-data">
      <x-forms.input label="Your name" name="name" />
      <x-forms.input label="Email" name="email" type="email" />
      <x-forms.input label="Password" name="password" type="password" />
      <x-forms.input label="Confirm password" name="password_confirmation" type="password" />

      <x-forms.divider />

      <x-forms.input label="Company" name="company" />
      <x-forms.input label="Website" name="url" />
      <x-forms.input label="Logo" name="logo" type="file" />

      <div class="flex justify-between items-baseline">
         <x-forms.button>Register</x-forms.button>
         <x-link href="/login">Log in instead</x-link>
      </div>
   </x-forms.form>
</x-layout>