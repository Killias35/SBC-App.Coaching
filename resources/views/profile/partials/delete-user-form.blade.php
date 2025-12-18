<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-red-500">
            Supprimer le compte
        </h2>

        <p class="mt-1 text-sm text-gray-300">
            Une fois votre compte supprimé, toutes vos données et ressources seront définitivement effacées. 
            Avant de supprimer votre compte, assurez-vous de télécharger toutes les informations que vous souhaitez conserver.
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 hover:bg-red-700 rounded-xl shadow-lg font-bold py-2 px-4"
    >
        Supprimer le compte
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 space-y-4">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-red-500">
                Êtes-vous sûr de vouloir supprimer votre compte ?
            </h2>

            <p class="mt-1 text-sm text-gray-300">
                Une fois votre compte supprimé, toutes vos données et ressources seront définitivement effacées. 
                Veuillez entrer votre mot de passe pour confirmer la suppression.
            </p>

            <div>
                <x-input-label for="password" value="Mot de passe" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 bg-gray-800 border-gray-700 text-white rounded-xl focus:ring-2 focus:ring-red-500"
                    placeholder="Mot de passe"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-400" />
            </div>

            <div class="flex justify-end gap-3 mt-6">
                <x-secondary-button x-on:click="$dispatch('close')" class="bg-gray-700 hover:bg-gray-600 rounded-xl py-2 px-4 text-white font-semibold">
                    Annuler
                </x-secondary-button>

                <x-danger-button class="bg-red-600 hover:bg-red-700 rounded-xl py-2 px-4 shadow-lg font-bold">
                    Supprimer le compte
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
