<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
