<x-guest-layout>
    <x-auth-card>
        <div class="absolute top-0 right-0 bg-dark-100 dark:bg-dark-900">
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="underline text-md dark:text-dark-400">Log in</a>
                <x-theme-toggle />
            </div>
        </div>
        <x-slot name="logo">
            <a href="/" class="flex items-center justify-between space-x-4">
                <x-application-logo class="w-20 h-20 fill-current lg:w-12 lg:h-12 text-dark-400 dark:text-dark-400" />
                <span class="hidden font-semibold uppercase lg:inline-flex text-md">LaraWIND</span>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm underline text-dark-400 hover:text-dark-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>
    </x-auth-card>
</x-guest-layout>
