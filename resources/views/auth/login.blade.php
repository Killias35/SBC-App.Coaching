<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-gray-900/90 backdrop-blur rounded-2xl shadow-xl p-8 border border-gray-700">

            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-extrabold text-white tracking-wide">
                    Connexion
                </h1>
                <p class="text-gray-400 text-sm mt-2">
                    Reprends l’entraînement là où tu l’as laissé
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-400" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" value="Email"
                        class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="email"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-red-600"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" value="Mot de passe"
                        class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-red-600"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-gray-400">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded bg-gray-800 border-gray-600 text-red-600 focus:ring-red-600"
                        >
                        <span class="ml-2">Se souvenir de moi</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-gray-400 hover:text-white transition">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <button
                    type="submit"
                    class="w-full py-3 bg-red-600 hover:bg-red-700 transition rounded-xl text-white font-bold tracking-wide shadow-lg"
                >
                    🔥 Se connecter
                </button>
            </form>

             <a href="{{ route('register') }}"
               class="text-center text-sm text-gray-400 hover:text-white transition">
                Pas encore de compte ? S'inscrire
            </a>

        </div>
    </div>
</x-guest-layout>
