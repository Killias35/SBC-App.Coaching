<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">

        <!-- Logo -->
        <div class="mb-6">
            <x-application-logo class="w-24 h-24 text-red-600 drop-shadow-lg" />
        </div>

        <!-- Card -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-gray-900/80 backdrop-blur rounded-3xl shadow-2xl border border-gray-700">
            
            <!-- Info Text -->
            <div class="mb-6 text-center text-gray-300 text-sm">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Mot de passe')" class="text-gray-300 uppercase tracking-wide text-xs" />

                    <x-text-input
                        id="password"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Button -->
                <div class="flex justify-end mt-4">
                    <x-primary-button class="bg-red-600 hover:bg-red-700 rounded-2xl font-bold tracking-wide py-2 px-4 shadow-lg">
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
