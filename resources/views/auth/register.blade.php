<x-auth.layout action="{{ route('register.attempt') }}">
    <x-slot:title>Register</x-slot:title>

    <x-auth.warning auth-type="register" />

    <x-auth.input-container>
        <x-auth.form-row>
            <x-form-label for="first_name">First name</x-form-label>
            <x-form-input id="first_name" name="first_name" :value="old('first_name')" required />
            <x-form-error name="first_name" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="middle_name">Middle name</x-form-label>
            <x-form-input id="middle_name" name="middle_name" :value="old('middle_name')" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="last_name">Last name</x-form-label>
            <x-form-input id="last_name" name="last_name" :value="old('last_name')" required />
            <x-form-error name="last_name" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input id="email" name="email" type="email" :value="old('email')" required />
            <x-form-error name="email" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input id="password" name="password" type="password" required />
            <x-form-error name="password" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="password_confirmation">Confirm password</x-form-label>
            <x-form-input id="password_confirmation" name="password_confirmation" type="password" required />
        </x-auth.form-row>

        <x-auth.form-row class="mt-2">
            <x-form-button class="w-100 py-2" type="submit">Submit</x-form-button>
        </x-auth.form-row>
    </x-auth.input-container>
</x-auth.layout>