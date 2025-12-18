<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">

        <!-- Logo -->
        <div class="mb-6">
            <x-application-logo class="w-24 h-24 text-red-600 drop-shadow-lg" />
        </div>

        <!-- Card -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-gray-900/80 backdrop-blur rounded-3xl shadow-2xl border border-gray-700">

            <!-- Info Text -->
            <div class="mb-6 text-center text-white-300 text-sm">
                Mot de passe oublie ? Pas de panique, nous vous enverrons un lien pour vous aider à vous reconnecter.
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-400" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="email"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Send Reset Link Button -->
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="bg-red-600 hover:bg-red-700 rounded-2xl font-bold tracking-wide py-2 px-4 shadow-lg">
                        Envoyer le lien de reinitialisation
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
