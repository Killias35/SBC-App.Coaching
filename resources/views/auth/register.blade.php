<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">

        <!-- Card -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-gray-900/80 backdrop-blur rounded-3xl shadow-2xl border border-gray-700">

            <!-- Title -->
            <div class="text-center mb-6">
                <h1 class="text-4xl font-extrabold text-white tracking-tight">
                    Rejoins l'équipe !
                </h1>
                <p class="text-gray-400 text-sm mt-1">
                    Crée ton compte et commence ton suivi d'entraînement
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" value="Nom" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="name"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Pseudo -->
                <div>
                    <x-input-label for="pseudo" value="Pseudo" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="pseudo"
                        type="text"
                        name="pseudo"
                        :value="old('pseudo')"
                        required
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                    />
                    <x-input-error :messages="$errors->get('pseudo')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" value="Email" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="email"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="username"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" value="Mot de passe" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" value="Confirmer le mot de passe" class="text-white uppercase tracking-wide text-xs" />
                    <x-text-input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                        class="mt-1 w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500 transition"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Actions -->
                <div class="flex flex-col gap-4 mt-6">
                    <button
                        type="submit"
                        class="w-full py-3 bg-red-600 hover:bg-red-700 transition rounded-2xl text-white font-bold tracking-wide shadow-lg transform hover:-translate-y-1"
                    >
                        💪 Créer mon compte
                    </button>

                    <a href="{{ route('login') }}"
                       class="text-center text-sm text-gray-400 hover:text-white transition">
                        Déjà inscrit ? Se connecter
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
