<x-auth.layout action="{{ route('login.attempt') }}">
    <x-slot:title>Log in</x-slot:title>

    <x-auth.warning auth-type="login" />

    <x-auth.input-container>
        <x-auth.form-row>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input id="email" name="email" type="email" :value="old('email')" autocomplete="email" required />
            <x-form-error name="email" />
        </x-auth.form-row>

        <x-auth.form-row>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input id="password" name="password" type="password" required />
            <x-form-error name="password" />
        </x-auth.form-row>

        <x-auth.form-row class="mt-2">
            <x-form-button class="w-100 py-2" type="submit" :is-submit="true">Log in</x-form-button>
        </x-auth.form-row>
    </x-auth.input-container>
</x-auth.layout>