<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-red-500">
            Changer le mot de passe
        </h2>

        <p class="mt-1 text-sm text-white">
            Assurez-vous que votre compte utilise un mot de passe long et sécurisé.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Mot de passe actuel -->
        <div>
            <x-input-label for="update_password_current_password" value="Mot de passe actuel" class="text-white" />
            <x-text-input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="mt-1 block w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500"
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-400" />
        </div>

        <!-- Nouveau mot de passe -->
        <div>
            <x-input-label for="update_password_password" value="Nouveau mot de passe" class="text-white" />
            <x-text-input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="mt-1 block w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500"
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-400" />
        </div>

        <!-- Confirmation du nouveau mot de passe -->
        <div>
            <x-input-label for="update_password_password_confirmation" value="Confirmer le mot de passe" class="text-white" />
            <x-text-input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="mt-1 block w-full bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500"
                autocomplete="new-password" 
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-400" />
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-4">
            <x-primary-button class="bg-red-600 hover:bg-red-700 rounded-2xl py-2 px-4 shadow-lg font-bold">
                Enregistrer
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-400"
                >
                    Mot de passe modifié.
                </p>
            @endif
        </div>
    </form>
</section>
