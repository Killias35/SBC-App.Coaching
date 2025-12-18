<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">

        <!-- Logo -->
        <div class="mb-6">
            <x-application-logo class="w-24 h-24 text-red-600 drop-shadow-lg" />
        </div>

        <!-- Card -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-gray-900/80 backdrop-blur rounded-3xl shadow-2xl border border-gray-700">

            <!-- Form -->
            <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="email"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                        type="email"
                        name="email"
                        :value="old('email', $request->email)"
                        required
                        autofocus
                        autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Mot de passe')" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="password"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="password_confirmation"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Reset Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-red-600 hover:bg-red-700 rounded-2xl font-bold tracking-wide py-2 px-4 shadow-lg">
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
