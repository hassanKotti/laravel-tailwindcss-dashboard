<x-guest-layout class="max-h-screen">
    <x-auth-card>
        <div class="absolute top-0 right-0 bg-dark-100 dark:bg-dark-900">
            <div class="flex items-center justify-between">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm underline text-dark-400">Register</a>
                @endif
                <x-theme-toggle />
            </div>
        </div>
        <x-slot name="logo">
            <a href="/" class="flex items-center justify-between space-x-4">
                <x-application-logo class="w-20 h-20 fill-current lg:w-12 lg:h-12 text-dark-400 dark:text-dark-400" />
                <span class="hidden font-semibold uppercase lg:inline-flex text-md">LaraWIND</span>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class="text-dark-400" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="text-dark-400" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="text-purple-600 rounded shadow-sm dark:bg-dark-500 border-dark-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-dark-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 space-x-4">

                @if (Route::has('password.request'))
                    <a class="text-sm underline text-dark-400 hover:text-dark-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>
    </x-auth-card>
</x-guest-layout>
